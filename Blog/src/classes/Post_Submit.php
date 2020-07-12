<?php
namespace MyBlog\classes;
use MyBlog\includes\Dbh;

//session_start();
//include_once ('include/db_connect.php');
//include_once ('new_post.php');


class Post_Submit extends Dbh  {

  private $db;

     //include database connection
 public function __construct($Dbh){
   $this->db = $Dbh;
   $this->db = $this->db->dbConnect();
  }
//starting a session
//session_start();
//include ('db_connect.php');
//if (!isset($_SESSION["user_id"])){
//  header('Location: login.php');
//  exit();
//}
 //checking if submit botton has been klicked
 public function submitPost(){

if (isset($_POST["submit"])){
    //getting and vallidating data from form
    $title = $_POST["title"];
    $body = $_POST["body"];
    $author = $_POST["author"];

    //$title = $db->real_escape_string($title);
    //$body = $db->real_escape_string($body);
    //$author = $db->real_escape_string($author);
    //$user_id = ""; //$_SESSION["user_id"];
    $date_1 = date("Y/m/d h:i:sa");
    $body = htmlentities($body);

    if ($title && $body && $author){
      // prepare sql and bind parameters
  $this->db->exec ("INSERT INTO post (title, content, posted, author)
  VALUES ('$title', '$body', '$date_1', '$author')");
     //$this->db->exec($sql);
       //if ($this->db->exec($sql)){
         echo "Post added.";
       //} else {
      //   echo "error";
       //}

    } else {
      echo "Missing data.";
    }

}
}
}
?>
