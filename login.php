<?php
//starting a session
session_start();
//checking if submit botton has been klicked
if (isset($_POST["submit"])){
  //get data from form
  $user = $_POST["username"];
  $pwrd = $_POST["password"];
  //include database connection
  include ('db_connect.php');
  //form data vallidation and security
  if (empty($user) || empty($pwrd)){
    echo "Missing info.";
  } else {
    $user = strip_tags($user);
    $user = $db->real_escape_string($user);
    $pwrd = strip_tags($pwrd);
    $pwrd = $db->real_escape_string($pwrd);
    //querying the database and starting a session
    $query = $db->query("SELECT user_id, username FROM user WHERE username= '$user' AND password= '$pwrd'");
    if($query->num_rows === 1){
      while ($row = $query->fetch_object()){
        $_SESSION['user_id'] = $row->user_id;
      }
        header('Location: index.php');
        exit();
    } else {
      echo "Missing info2";
    }
  }
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
