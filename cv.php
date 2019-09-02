<?php
session_start();
$error='';

if (isset($_POST['submit'])){
$name=$_POST["username"];
$password=$_POST["password"];
$phone=$_POST["phone"];
$age=$_POST["age"];
$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
$idd=mysqli_connect("localhost","root","")
    or die ("Could not connect");

mysqli_select_db($idd,"mobile");



$res=mysqli_query($idd,"insert into user(name,password,phone,id_market ,image,age) values('$name','$password' ,'$phone','1','$image','$age')");

$_SESSION['login_user']=$name; // Initializing Session
header("location: hassan6.php");
mysqli_close($idd);


}

?>
<html>

<body>
<link rel="stylesheet"  type="text/css" href="CV_new.css">

<section>


<div id="login">

<form action="" method="post"  enctype="multipart/form-data">
<label>UserName :</label>
<input id="name" name="username" placeholder="username" type="text">
<label style="yellow">Password :</label>
<input id="password" name="password" placeholder="**********" type="password">

<label style="yellow">   Number phone  :</label>
<input id="phone" name="phone" placeholder="079****" type="text">

 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label style="yellow">    AGE :</label>
<input id="age" name="age" placeholder="age" type="text">
<label style="yellow">      Image:</label>
<input type="file" name="image" >

<input name="submit" type="submit" value=" Rigister ">
<a href="mohamad2.php" style="color:white;">Already Have One ?</a>
</form>

   
</div>

 
 </section>


</body>
</html>