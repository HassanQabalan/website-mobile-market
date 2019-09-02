<?php
session_start();
$error ="";
$m=true;
if (isset($_POST['submit'])) {
	
	
 if(!empty($_POST['name'])&&!empty($_POST['name'])){
// Define $username and $password

$username=$_POST['name'];
$password=$_POST['pass'];

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "");

// Selecting Database
$db = mysqli_select_db($connection,"mobile");
// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($connection,"select * from user where name='$username'  AND password='$password'" );
$rows = mysqli_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: hassan6.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
  
}
mysqli_close($connection); // Closing Connection
 }
 
else{
	$m.="enter here ";
}
}
?>

<html>
 
        <head>
	        <link rel="stylesheet"  type="text/css" href="CV_new.css">
</head>
	    	<section>


<div id="login">


<form action="" method="post"  enctype="multipart/form-data">
<label>UserName :</label>
<input id="name" name="name" placeholder="username" type="text">
<label style="yellow">Password :</label>
<input id="password" name="pass" placeholder="**********" type="password">



<input name="submit" type="submit" value=" log in user ">
<a href="cv.php" style="color:white;">Rigister new</a>
</form>
<p> <?php echo "$error" ?>  </p>
<p> <?php if ( $m !== true )  {
        echo("<p style= 'color:red;'>$m</p>\n");
    }
?>  </p>
   
</div>

 
 </section>
	    </body>
</html>