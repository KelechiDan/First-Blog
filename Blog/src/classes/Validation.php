<?php

namespace MyBlog\classes;

class Validation
{

    private $db;

    public function __construct($Dbh)
    {
        $this->db = $Dbh;
        $this->db = $this->db->dbConnect();
    }

    //checking if submit botton has been klicked
    public function validateLogin($user, $password)
    {
        if (empty($user) || empty($password)) {
            echo "Missing info.";
        } else {
            $user = strip_tags($user);
            $password = strip_tags($password);

            $st = $this->db->prepare("select * from user where username=? and password=?");
            $st->bindParam(1, $user);
            $st->bindParam(2, $password);
            $st->execute();

            if ($st->rowCount() === 1) {
                while ($row = $st->fetch()) {
                    $_SESSION['user_id'] = $row->user_id;
                }
                header('Location: index.php');
            } else {
                echo "Incorrect username or password";
            }
        }
    }
}
