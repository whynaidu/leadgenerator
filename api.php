<?php
include"config/config.php";
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="SELECT * FROM `user` WHERE `email`='$email' AND `password`='$password'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $count=mysqli_num_rows($result);
    if($count==1){
        $_SESSION['id']=$row['id'];

        $_SESSION['companyname']=$row['companyname'];
        $_SESSION['name']=$row['name'];
        $_SESSION['email']=$row['email'];
        $_SESSION['admin']=$row['is_admin'];
        echo "<script>alert('Login Successful');</script>";
        header("location:dashboard.php");
    }
    else{
        echo"<script>alert('Invalid Email or Password',window.location.href='index.html');</script>";
    }
  
}

if(isset($_POST['profileupdate'])){
    $name=$_POST['name'];
    
    $companyname=$_POST['companyname'];
    $file=$_FILES['profile']['name'];   
    $filedet=$_FILES['profile']['tmp_name'];
    $loc="assets/images/".$file;
    move_uploaded_file($filedet,$loc);
    $sql="UPDATE `user` SET `name`='$name',`companyname`='$companyname',`image`='$file' WHERE `id`='$loginid'";
    $result=mysqli_query($conn,$sql);
    if($result==1){
        $sq1="SELECT * FROM `user` WHERE `id`='$loginid'";
        $result1=mysqli_query($conn,$sq1);
        echo "<script>alert('Update Successful',window.location.href='profile.php');</script>";
    }
    else{
        echo"<script>alert('Error',window.location.href='profile.php');</script>";
    }
  
}
if(isset($_POST['addleads'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $whatsapp=$_POST['whatsapp'];
    $service=$_POST['service'];
    $sql="INSERT INTO `leads`(`name`,`email`,`mobile_no`,`whatsapp_no`,`service`,`userid`) VALUES('$name','$email','$mobile','$whatsapp','$service','$loginid')";
    $result=mysqli_query($conn,$sql);
    if($result==1){
        
        echo "<script>alert('Update Added',window.location.href='leads.php');</script>";
    }
    else{
        echo"<script>alert('Error',window.location.href='leads.php');</script>";
    }
  
}
?>