<?php

echo '<p style="color:blue;">  EMPLOYEE </p>';

$idd=mysqli_connect("localhost","root","")
    or die ("Could not connect");

mysqli_select_db($idd,"mobile");






$z=mysqli_query($idd, "select * from employee ORDER BY id  LIMIT 1,2");


   print "<table border=1 cellpadding=3 cellspacing=0 style='color:red;'>";
  
   print "<tr> <td> ID </td><td> Name </td><td> phone_number </td><td> sex </td> <td> salary </td> <td> id_market </td> <td> password </td> <td> Type </td></tr>\n";
   
 
   for ($i=0;$i <= mysqli_num_rows($z);$i++) {
       print "<tr>";

       $row = mysqli_fetch_row($z);
       foreach ($row as $value) {
           
           
           print "<td >$value</td>";
		   
		   
       }
          print "</tr>\n";
     }
   
   print "</table>";

$id = $_POST["id"];

if (!empty($id))
  {
	$res=mysqli_query($idd,"delete from user where id='$id'");
  }
   
   echo '<br><p style="color:blue;">  USERS </p><br>';
   

$res=mysqli_query($idd, "select * from user");


   print "<table border=1 cellpadding=3 cellspacing=0  style='color:red;'> ";
  
   print "<tr> <td> ID </td><td> Name </td><td> phone Number </td><td> IMAGE </td> <td> Action </td></tr>\n";
   
 
   for ($i=0;$i < mysqli_num_rows($res);$i++) {
       print "<tr>";

       $v = mysqli_fetch_row($res);
       
           echo "<td>";
    echo(htmlentities($v[0]));
    echo("</td>");

         
           echo "<td>";
    echo($v[1]);
    echo("</td><td>");  
       
    echo($v[3]);
    echo("</td>");
    
        
  
echo '<td><img style="border-radius:50%;" width=100 height=100 src="data:image/jpeg;base64,' 
  .base64_encode( $v[5]) .'"</td><td>';
  
  echo('<form action="hassan4.php" method="post">
<input type="hidden" '); 
   echo('name="id" value="'.$v[0].'">'."\n");

    echo('<input type="submit" value="Del" name="name">');
  
 print "</td> <form></tr>\n";
   
   
     }

   print "</table>";
   
   
      echo '<p style="color:blue;">  RESRVE </p>';

   $x=mysqli_query($idd, "select mobile_name ,type_mobie ,name_customer from mobile_type");


   print "<table border=1 cellpadding=3 cellspacing=0 style='color:red;'>";
  
   print "<tr> <td> mobile Name </td><td> Mobile type </td><td> Customer Name </td></tr>\n";
   
 
   for ($i=0;$i <= mysqli_num_rows($x);$i++) {
       print "<tr>";

       $row = mysqli_fetch_row($x);
       foreach ($row as $value) {
           
           
           print "<td >$value</td>";
		   
		   
       }
          print "</tr>\n";
  
   
     }
   
   print "</table>";




mysqli_close($idd);

?>

<html lang="en" dir="ltr">
        <head>
	        <meta charset="utf-8">
			<title>Content Page</title>
			<link rel="stylesheet" href="hassan4.css">
			<script src="https://use.fontawesome.com/d1341f9b7a.js"></script>
			
	    </head>
		
		
	    <body>
				 				 <a style="color:white;"href="hassan5.php"> back</a>  


		    <div class="box">
	        	<img src="hu.jpg" class="box-img">
	        	<h1>Mohamad</h1>
	        	<h5>Software Engineering</h5>
	        
	        	<ul>
	        		<li><a href="https://web.facebook.com/hassanaboomar93"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
	        		<li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
	        		<li><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
	        	</ul>
	        </div>
			
	  
	        
	    </body>
</html>