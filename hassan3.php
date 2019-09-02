<?php
$error="";
if (isset($_POST['submit'])) {
if(!empty($username=$_POST['name'])&&!empty($password=$_POST['pass'])){
// Define $username and $password
$username=$_POST['name'];
$password=$_POST['pass'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "");

// Selecting Database
$db = mysqli_select_db($connection,"mobile");


$res=mysqli_query($connection,"select * from employee where name='$username'  AND password='$password'");
  $row=mysqli_fetch_assoc($res);
   $type=$row['type'];
   //$password=$row["password"];
  // $phone=$row["phone"];
   //$age=$row["age"];


// SQL query to fetch information of registerd users and finds user match.
//$query = mysqli_query($connection,"select * from employee where name='$username'  AND password='$password'" );
//$rows = mysqli_num_rows($query);
if ($type == "Manger") {
//$_SESSION['login_user']=$username; // Initializing Session
header("location: hassan4.php"); // Redirecting To Other Page
} else {
header("location: hassan5.php");
}
mysqli_close($connection); // Closing Connection
}
}
?>


<html>
        <head>
	        <meta charset="utf-8">
			<title>LogIn Form</title>
			<link rel="stylesheet" href="hassan3.css">
	        <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
	    </head>
	    <body>
	    	<div class="signup-form">
	        <form class="box" method="post"  action="" >
			    <h1> MANGER OR EMPLOYEE</h1>
				<input type="text" name="name" placeholder="Full Name"      class="txtb">
				<input type="password" name="pass" placeholder="Password" class="txtb">
				
				<input type="submit" name="submit" value="Log in" class="signup-btn">

				 				 <a style="color:white;"href="hassan2.php">Rigister Now</a> <br> 
		 				 <a style="color:white;"href="hassan5.php"> back</a>  


			</form>
			<p> <i><?php echo $error; ?></i></p>
		</div>
	    </body>
</html>