<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "");
// Selecting Database
$db = mysqli_select_db($connection, "mobile");
session_start();// Starting Session
// Storing Session

$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($connection,"select name from user where name='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['name'];
//if(empty($login_session)){header("location: cv.php");}

?>
