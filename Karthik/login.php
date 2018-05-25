<?php
  require 'common.php';
$user=$_POST['user_name'];
$pass=$_POST['pass_word'];
  $select_query="Select username,password from login where username='$user' and password='$pass'";

  $result=mysqli_query($con,$select_query) or die(mysqli_error($con));

  if(mysqli_num_rows($result)==0){
    header('location:index.php?error=Invalid username or password');
  }
  else{
    $row=mysqli_fetch_array($result);
    $_SESSION['username']=$row['username'];
    header("location:dashboard.php");
  }









?>
