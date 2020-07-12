<?php
require_once realpath("vendor/autoload.php");
use MyBlog\classes\Post_Submit;
use MyBlog\includes\Dbh;

 //include_once ('include/db_connect.php');
 //include_once ('classes/post_submit.php');//starting a session
//session_start();

$obj3 = new Post_Submit(new Dbh);
$obj3->submitPost();

?>


<DoCTYPE html>
<html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>

<!--form for new blog posts-->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

  Title: <input type="text" name="title">
  <br><br>
  Body: <textarea name="body" rows="5" cols="50"></textarea>
  <br><br>
  Author: <input type="text" name="author"><br><br>
  <input type="submit" name="submit" value="Submit">

</form>

</body>
</html>
