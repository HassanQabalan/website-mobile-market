<?php
include('session.php');
$x =$login_session;
if (isset($_POST['submit'])){
$idd=mysqli_connect("localhost","root","")
    or die ("Could not connect");

mysqli_select_db($idd,"mobile");


$name=$_POST["name"];
$password=$_POST["password"];
$phone = $_POST["phone"];
$age = $_POST["age"];


//$res=mysqli_query($idd,"select * from user where name='$x'");
  //$row=mysqli_fetch_assoc($res);
 //  $name1=$row["name"];
   //$password=$row["password"];
  // $phone=$row["phone"];
   //$age=$row["age"];



$res=mysqli_query($idd, "update user set name='$name', password='$password', phone='$phone' , age='$age' where name='$x'");

$_SESSION['login_user']=$name;

//print ("your changes are updated .");


mysqli_close($idd);

}


?>
<html>
<head>  <meta charset ="utf-8"> <title> hasan</title>

<link rel="stylesheet" href="hassan4 - Copy.css">





</style>
</head>
<body>
	  
  
<div class="signup-form">
	        <form class="box" method="post"  action="" >
			    <input type="text" name="name" placeholder="Full Name"      class="txtb">
			    <input type="text" name="password" placeholder="PASSWORD "      class="txtb">
				<input type="password" name="phone" placeholder="PHONE " class="txtb">
				<input type="text" name="age" placeholder="AGE"      class="txtb">
				<input type="submit" name="submit" value="UPDATE " class="signup-btn">
		  
			</form>
		</div>
		<div >
		 <form  method="post"  action="hassan6.php" >
			    
				<input type="submit" name="submit" value="back " class="signup-btn">

		  
			</form>
		</div>
<div class="box">
	       	
	        	
	        </div>

</body>
</html>