<?php
//starting a session
session_start();
//destroying the session
session_destroy();
//go to login page
header("Location: login.php");
exit();
?>
