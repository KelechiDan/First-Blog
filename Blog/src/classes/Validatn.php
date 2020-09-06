<?php
namespace MyBlog\classes;
use MyBlog\includes\Dbh;
//use \PDO;

//session_start();
//include database connection
  //include_once ('include/db_connect.php');
////include_once ('index.php');


class Validatn {

private $db;

public function __construct($Dbh){
  $this->db = $Dbh;
  $this->db = $this->db->dbConnect();
 }

//include database connection
//public function __construct(){
  //$this->db = new Dbh();
  //$this->db = $this->db->dbConnect();

//}



//checking if submit botton has been klicked
public function validate_login ($user, $pwrd) {
  if (empty($user) || empty($pwrd)){
  echo "Missing info.";
} else {
  $user = strip_tags($user);
  //$user = $db->real_escape_string($user);
  $pwrd = strip_tags($pwrd);
  //$pwrd = $db->real_escape_string($pwrd);
  //querying the database and starting a session
  $st = $this->db->prepare("select * from user where username=? and password=?");
  $st->bindParam(1, $user);
  $st->bindParam(2, $pwrd);
  $st->execute();

  if($st->rowCount() ===1){
    while ($row = $st->fetch()){
    $_SESSION['user_id'] = $row->user_id;
  }
    header('Location: index.php');
  } else {
    echo "Incorrect username or password";
  }
//}
}
}
}
?>
