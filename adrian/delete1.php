<?php
$connect = mysql_connect("localhost","ksweberi_adrian1","Designer@24") or die("Could not be
Established the Connection".mysql_error());
$database = mysql_selectdb("ksweberi_adrian1") or die("Cannot be Open the
Database".mysql_error());



$quer21 = "DELETE FROM images_tbl WHERE images_id ='$_GET[id]'";  
if(mysql_query($quer21,$connect))

	header("Location: uploadimage.php");

else 
  echo " Not Deleted";
  
  
 






?>