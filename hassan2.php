<?php
session_start();
$error='';

if (isset($_POST['submit'])){
$name=$_POST["name"];
$password=$_POST["pass"];
$phone=$_POST["phone"];

$idd=mysqli_connect("localhost","root","")
    or die ("Could not connect");

mysqli_select_db($idd,"mobile");









$res=mysqli_query($idd,"insert into employee(name,password,phone_number,id_market,type ) values('$name','$password' ,'$phone','1' ,'employee')");
header("location: hassan5.php");

mysqli_close($idd);


}
?>

<html>
        <head>
	        <meta charset="utf-8">
			<title>EMPLOYEE</title>
			<link rel="stylesheet" href="hassan2.css">
	        <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
	    </head>
	    <body>
	    	<div class="signup-form">
	        <form class="box" method="post"  action="" >
			    <h1>EMPLOYEE</h1>
			    <input type="text" name="name" placeholder="Full Name"      class="txtb">
				<input type="password" name="pass" placeholder="Password" class="txtb">
				<input type="text" name="phone" placeholder="phone"      class="txtb">
				<input type="submit" name="submit" value="Create Account" class="signup-btn">

				 <a href="hassan3.php">Already Have One ?</a>  
			</form>
		</div>
	    </body>
</html>