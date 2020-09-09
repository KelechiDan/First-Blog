<?php

namespace MyBlog\classes;

use MyBlog\includes\Dbh;

class PostSubmit extends Dbh
{

    private $db;

    //include database connection
    public function __construct($Dbh)
    {
        $this->db = $Dbh;
        $this->db = $this->db->dbConnect();
    }

    //checking if submit button has been clicked
    public function submitPost()
    {
        if (isset($_POST["submit"])) {
            //getting and vallidating data from form
            $title = $_POST["title"];
            $body = $_POST["body"];
            $author = $_POST["author"];

            $date_1 = date("Y/m/d h:i:sa");
            $body = htmlentities($body);

            if ($title && $body && $author) {
                // prepare sql and bind parameters
                $this->db->exec(
                    "INSERT INTO post (title, content, posted, author) VALUES ('$title', '$body', '$date_1', '$author')"
                );

                echo "Post added.";
            } else {
                echo "Missing data.";
            }
        }
    }
}
