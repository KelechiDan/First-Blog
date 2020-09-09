<?php
require_once realpath("vendor/autoload.php");
use MyBlog\classes\Post;
use MyBlog\includes\Dbh;

//include_once ('include/db_connect.php');
//include_once ('classes/countable.php');

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
     <h3> My Home Page. </h3>
          <article>
            <h2><?php
            $obj1 = new Post(new Dbh);
            echo $obj1->showTitle();
           ?></h2>

           <p>
             <?php
             $obj2 = new Post(new Dbh);
             echo $obj2->showContent();
             echo "<br><br>";
              $obj3 = new Post(new Dbh);
             echo $obj3->showAuthor();
            ?>
           </p>

          </article>

     </div>

   </body>
 </html>
