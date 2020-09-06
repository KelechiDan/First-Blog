<?php
require_once realpath("vendor/autoload.php");
use MyBlog\classes\Posts;
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
            $obj1 = new Posts(new Dbh);
            echo $obj1->show_title();
           ?></h2>

           <p>
             <?php
             $obj2 = new Posts(new Dbh);
             echo $obj2->show_content();
             echo "<br><br>";
              $obj3 = new Posts(new Dbh);
             echo $obj3->show_author();
            ?>
           </p>

          </article>

     </div>

   </body>
 </html>
