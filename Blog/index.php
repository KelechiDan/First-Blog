<?php
require_once realpath("vendor/autoload.php");
use MyBlog\classes\Post;
use MyBlog\includes\Dbh;

//include_once ('classes/countable.php')
 //include_once ('include/db_connect.php');
 //include_once ('classes/countable.php');//starting a session



//session_start();
//if (isset($_SESSION['user_id'])){
//  header('Location: login.php');
  //exit();

//}

//$obj2 = new Count_1();
//$obj2->postCount();
//including database connection

//post Countable
//$post_count = $db->query("SELECT * FROM post");

?>

<DoCTYPE html>
<html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
  <!--creating navigations-->
     <div id= "container">

       <div id= "menu">
         <ul>
            <li><a href="index2.php">Home</a></li>
            <li><a href="new_post.php">New_post</a></li>
            <li><a href="logout.php">Logout</a></li>
         </ul>
       </div>

     </div>
     <!--output total blog posts posted-->
     <div id= "mainContent">
         <tr>
           <td>Total Blog Post: </td>
           <td><?php

             $obj = new Post(new Dbh);
             echo $obj->postCount();

           ?></td>

         </tr>

     </div>


   </body>
 </html>
