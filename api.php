<?php
session_start();
include"config/config.php";
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="SELECT * FROM `user` WHERE `email`='$email' AND `password`='$password'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $count=mysqli_num_rows($result);
    if($count==1){
        $_SESSION['companyname']=$row['companyname'];
        $_SESSION['name']=$row['name'];
        $_SESSION['email']=$row['email'];
        header("location:dashboard.php");
    }
    else{
        echo"<script>alert('Invalid Email or Password');</script>";
    }
  
}
?>