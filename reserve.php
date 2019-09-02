<?php
$idd=mysqli_connect("localhost","root","")
    or die ("Could not connect");

mysqli_select_db($idd,"mobile");



  


if (isset($_POST['submit'])||isset($_POST['submit1'])){

$mobile_name=$_POST["mobile_name"];
$type_mobie=$_POST["type_mobie"];
$name_customer=$_POST["name_customer"];
$mobile_search=$_POST["mobile_search"];


$res=mysqli_query($idd,"insert into mobile_type(id_market,mobile_name,type_mobie,name_customer ) 
values('1','$mobile_name' ,'$type_mobie','$name_customer')");


 print " <center><div><table border=1 cellpadding=3 cellspacing=0 style='color:white; float:center;'>";
  
  		

   print "<tr> <td> ID </td><td> NAME </td><td> mobile_specefication </td><td> price </td></tr>\n";
   
$res=mysqli_query($idd, "select * from mobiles where name like'%$mobile_search%'");
 
   for ($i=1;$i <= mysqli_num_rows($res);$i++) {
       print "<tr>";

       $row = mysqli_fetch_row($res);
       foreach ($row as $value) {
           
           
           print "<td >$value</td>";
		   
		   
       }
          print "</tr>\n";
		  
     }
   
   print "</table></div></center>";


mysqli_close($idd);


}
?>
<html>
<head>  <meta charset ="utf-8"> <title> hasan</title>
<style type="text/css">

body{ background-image:url(Huawei-Mate-20-Wallpaper-5.jpg);
background-attachment:fixed; background-repeat: no-repeat;	background-size: cover;}

img {border:double 2px red;width:27%; height:150px; text-align:center; box-shadow:8px 8px 1px blue;}

#stretch {-webkit-border-image:url(strech.jpg) 80 80 80 80 stretch;}

div{border-width:25px; width:25%;       padding:20px 20px;}
#repeat {-webkit-border-image:url(strech.jpg) 80 80 80 80 repeat;} 



</style>
</head>

<body>
<form  method="post"  action=""  style="  float:right; margin-top:5px;" >
			 
			   
				<input type="text" name="mobile_search" placeholder="mobile search" class="txtb">
				
				
				<br>
				<input style="color:black;" type="submit" name="submit1" value="SEARCH DEVICE " class="signup-btn">

				
			</form>

	<div >
	        <form  method="post"  action="" >
			   <link rel="stylesheet" href="pag2.css">
			   
				<input type="text" name="mobile_name" placeholder="mobile_name" class="txtb">
				<input type="text" name="type_mobie" placeholder="type_mobie"      class="txtb">
				<input type="text" name="name_customer" placeholder="name_customer"      class="txtb">
				
				<br>
				<input type="submit" name="submit" value="reserve device" class="signup-btn">

				
			</form>
      </div>
	  
	  
	  
	  <div >
		 <form  method="post"  action="hassan6.php" >
			    
				<input type="submit" name="submit" value="back " class="signup-btn">

		  
			</form>
		</div>
	        
   
	 
	  
	  

</body>
</html>