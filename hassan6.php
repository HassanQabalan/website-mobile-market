<?php
include('session.php');

?>

<!DOCTYPE html>
  <html lang="en" dir="ltr">
  <head>
  	<meta charset="utf-8">
  	<title></title>
  	<link rel="stylesheet" href="hassan6.css">
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  </head>
  <body>
  
  
 
      <div class="header">
	  
	 <h2 class="logo"> <?php	 

$connection = mysqli_connect("localhost", "root", "");
// Selecting Database
$db = mysqli_select_db($connection, "mobile");

$ses_sql=mysqli_query($connection,"select image from user where name ='$login_session' ");

	$row = mysqli_fetch_assoc($ses_sql);

  echo "<tr>";
  
  

  echo '<td><img style="border-radius:50%;" width=100 height=100  src="data:image/jpeg;base64,' 
  .base64_encode( $row['image']) .'"</td>';
   
  echo "</tr>"; 
  
?></h2> 
	  
  <h2 class="logo" style="color:black;" > Welcome : <i><?php
	  if(empty($login_session)){header("location: cv.php");}else{

      
	  echo $login_session; }?></i>
      	</h2>

      	<ul class="menu">
      	  <li><a href="hassan5.php">HomePage</a></li>
          <li><a href="mohamad1.php">Edit Profile</a></li>
          <li><a href="hassan.php">Mobiles</a></li>
		  <li><a href="#">rtherthtr</a></li>
		  <li><a href="#">rtherthtr</a></li>
      	
      	</ul>
		 <center>
      	 <img src="Lo.jpg">
      	</center>
      </div>


	  
	 
  </body>
  </html>