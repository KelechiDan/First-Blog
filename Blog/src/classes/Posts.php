<?php
namespace MyBlog\classes;
//use \POD;
use MyBlog\includes\Dbh;


//include_once ('include/db_connect.php');


class Posts extends Dbh {

  private $db;

     //include database connection
  public function __construct($Dbh){
       $this->db = $Dbh;
       $this->db = $this->db->dbConnect();
      }
  //checking if submit botton has been klicked
  public function postCount(){

     //$stm = $this->db->query("SELECT * FROM post");
     //while ($row = $stm->fetch()){
       //$uid = $row['post_id'];
       //return $uid;
      $count = $this->db->query("SELECT count(*) FROM post")->fetchColumn();
      return $count;
     }

     public function show_title(){

       $stm = $this->db->query("SELECT * FROM post");
       while ($row = $stm->fetch()){
         $title = $row['title']."<br>";
         return $title;
       }
     }

     public function show_content(){

       $stm = $this->db->query("SELECT * FROM post");
       while ($row = $stm->fetch()){
         $content = $row['content']."<br>";
         return $content;
       }
     }

     public function show_author(){

       $stm = $this->db->query("SELECT * FROM post");
       while ($row = $stm->fetch()){
         $author = $row['author']."<br>";
         return $author;
       }
     }
    //$query = $this->db->prepare("select * from post where post_id=?, title=?, content=?, author=?");
    //$query->bindParam(1, $post_id);
    //$query->bindParam(2, $title);
    //$query->bindParam(3, $body);
    //$query->bindParam(4, $author);
    //$query->execute();

    //if ($query->rowCount()){
    //  while ($row = $query->fetch()) {
    //     return $row['title'];
    //  }

}
?>
