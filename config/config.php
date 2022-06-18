<?php
$host="151.106.124.51";// Host name
$user="u188140722_leadgenerator"; // Mysql username
$pass="Admin@123"; // Mysql password
$db="u188140722_leadgenerator"; // Database name


$conn=mysqli_connect($host,$user,$pass,$db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
?>