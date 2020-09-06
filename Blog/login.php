<?php
require_once realpath("vendor/autoload.php");
use MyBlog\classes\Validatn;
use MyBlog\includes\Dbh;

//session_start();
 //include_once ('include/db_connect.php');
 //include_once ('classes/validate_1.php');
//include_once ('index.php');




if (isset($_POST["submit"])){
  //get data from form
  $user = $_POST["username"];
  $pwrd = $_POST["password"];

  $obj = new Validatn(new Dbh);
  $obj->validate_login($user, $pwrd);

}
?>

<DoCTYPE html>
<html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
  <h2> Login Here </h2>
 <!-- form creation-->
  <div id= "container">
     <form action="login.php" method="post">
       <p>
        <label>Username:</label> <input type="text" name="username"><br>
      </p>
      <p>
        <label>Password:<label> <input type="password" name="password"><br>
      </p>
        <input type="submit" name= "submit" value= "login">
      </form>
  </div>

  </body>
</html>
