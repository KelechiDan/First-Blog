<?php
$host = "localhost";
$username = "root";
$password = "";
$dbase = "blog";

// Create connection
$db = new mysqli($host, $username, $password, $dbase);

// Check connection
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
} 
