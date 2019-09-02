<?php
session_start();
$error='';
if (isset($_POST['submit'])){
$name=$_POST["username"];
$password=$_POST["password"];
$phone=$_POST["phone"];
$idd=mysqli_connect("localhost","root","")
    or die ("Could not connect");

mysqli_select_db($idd,"mobile");
if (empty($_POST['name'])) {
$error = "Username or Password is invalid";


//if (empty($_POST['name']) || empty($_POST['password'])) {
//$error = "Username or Password is invalid";
}
else{

$res=mysqli_query($idd,"insert into user(name,password,phone,id_market) values('$name','$password' ,'$phone','1')");

$_SESSION['login_user']=$name; // Initializing Session
header("location: pag2.php");
mysqli_close($idd);

}
}







?>
