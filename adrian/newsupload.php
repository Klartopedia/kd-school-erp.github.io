<?php
include("mysqlconnect.php");


     $dat = $_POST["dat"];
    $title = $_POST["title"];
	$description = $_POST["description"];
   

 	$query_upload="INSERT INTO images_tbl2(dat,title,description) VALUES('$dat','$title','$description')";
	mysql_query($query_upload) or die("error in $query_upload == ----> ".mysql_error());  
	header("Location: uploadnotice.php");
	



?>