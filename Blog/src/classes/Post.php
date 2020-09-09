<?php
namespace MyBlog\classes;

use MyBlog\includes\Dbh;

class Post extends Dbh
{

    private $db;

    //include database connection
    public function __construct($Dbh)
    {
        $this->db = $Dbh;
        $this->db = $this->db->dbConnect();
    }

    //checking if submit botton has been klicked
    public function postCount()
    {
        return $this->db
            ->query("SELECT count(*) FROM post")
            ->fetchColumn();
    }

    public function showTitle()
    {
        $stm = $this->db->query("SELECT * FROM post");
        while ($row = $stm->fetch()) {
            $title = $row['title'] . "<br>";

            return $title;
        }
    }

    public function showContent()
    {
        $stm = $this->db->query("SELECT * FROM post");
        while ($row = $stm->fetch()) {
            $content = $row['content'] . "<br>";

            return $content;
        }
    }

    public function showAuthor()
    {

        $stm = $this->db->query("SELECT * FROM post");
        while ($row = $stm->fetch()) {
            $author = $row['author'] . "<br>";

            return $author;
        }
    }
}
