<?php

$con=mysqli_connect('127.0.0.1','root','hema2449','hema_assignment') or die(mysqli_error($con));

if (!isset($_SESSION['username'])) {
     session_start();
     
 }
?>
