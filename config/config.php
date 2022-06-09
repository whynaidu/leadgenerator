<?php
$host="localhost";// Host name
$user="root"; // Mysql username
$pass=""; // Mysql password
$db="leadgenerator"; // Database name


$conn=mysqli_connect($host,$user,$pass,$db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
?>