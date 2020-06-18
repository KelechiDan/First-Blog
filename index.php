<?php
//starting a session
session_start();
if (!isset($_SESSION['user_id'])){
  header('Location: login.php');
  exit();
}
//including database connection
include ("db_connect.php");
//post Countable
$post_count = $db->query("SELECT * FROM post");

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
           <td>Total Blog Post</td>
           <td><?php echo $post_count->num_rows?></td>
         </tr>

     </div>


   </body>
 </html>
