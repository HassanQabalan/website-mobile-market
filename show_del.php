<?php


$idd=mysqli_connect("localhost","root","")
    or die ("Could not connect");

mysqli_select_db($idd,"mobile");
$id = $_POST["id"];







if (!empty($id))
  {  

   $res=mysqli_query($idd,"delete from student where st_id='$id'");
  }






$res=mysqli_query($idd, "select * from employee");


   print "<table border=1 cellpadding=3 cellspacing=0>";
  
   print "<tr> <td> ID </td><td> Name </td><td> Branch </td><td> Mark </td> <td> Action </td></tr>\n";
   
 
   for ($i=0;$i < mysqli_num_rows($res);$i++) {
       print "<tr>";

       $row = mysqli_fetch_row($res);
       
           echo "<td>";
    echo(htmlentities($row[0]));
    echo("</td>");

         
           echo "<td>";
    echo(htmlentities($row[1]));
    echo("</td><td>");  
       
         
         
    echo(htmlentities($row[2]));
    echo("</td><td>");

        
    echo(htmlentities($row[3]));
    echo("</td><td>");
    
        echo('<form action="show_del.php" method="post">
<input type="hidden" '); 
   echo('name="id" value="'.$row[0].'">'."\n");

    echo('<input type="submit" value="Del" name="delete">');
  

 print "</tr>\n";
   
   
     }
   
   print "</table>";




mysqli_close($idd);

?>
<html>
<body>
<form ACTION="menu.php" METHOD="post">
<INPUT TYPE="SUBMIT" VALUE ="  Back to main Menu  ">
</form>
</body>
</html>