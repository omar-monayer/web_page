<?php
print_r($_POST);
include 'conect.php';
session_start();

    $email = $_POST['email'];
    $password = $_POST['password'];
   $_SESSION['email'] = $email;
   $_SESSION['password'] = $password;
   $sql="SELECT id FROM users WHERE email='$email';";
   $result=mysqli_query($con,$sql);
   $users=mysqli_fetch_assoc($result);
   $_SESSION['id']=$users['id'];
   header("Location:Profile.php");

 

?>