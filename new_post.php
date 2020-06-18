<?php
//starting a session
session_start();
//include database connection
include ('db_connect.php');
if (!isset($_SESSION["user_id"])){
  header('Location: login.php');
  exit();
}
 //checking if submit botton has been klicked
if (isset($_POST["submit"])){
    //getting and vallidating data from form
    $title = $_POST["title"];
    $body = $_POST["body"];
    $author = $_POST["author"];

    $title = $db->real_escape_string($title);
    $body = $db->real_escape_string($body);
    $author = $db->real_escape_string($author);
    $user_id = $_SESSION["user_id"];
    $date = date("Y/m/d h:i:sa");
    $body = htmlentities($body);
    if ($title && $body && $author){
      $query = $db->query("INSERT INTO post (user_id, title, content, posted, author)
       VALUES ('$user_id', '$title', '$body', '$date', '$author')");
       if ($query){
         echo "Post added.";
       } else {
         echo "error";
       }

    } else {
      echo "Missing data.";
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
