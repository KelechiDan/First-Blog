<?php

//connection to database
include ('db_connect.php');
//querying the database
$query = $db->prepare("SELECT post_id, title, content, author FROM post");
$query->execute();
$query->bind_result($post_id, $title, $body, $author);
?>

<DoCTYPE html>
<html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
    <!--displaying the results of the above query on the Home page.-->
     <div id='container'>
       <?php
       while($query->fetch()):
          ?>
          <article>
            <h2><?php echo $title?></h2>
            <p><?php echo $body?></p>
            <p><strong>Author: <?php echo  $author?></strong></p>
          </article>
        <?php endwhile?>

     </div>

   </body>
 </html>
