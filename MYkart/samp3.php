<?php
 $db = mysql_connect("localhost", "root","user") or die(mysql_error());
	mysql_select_db("tce", $db) or die(mysql_error());
	error_reporting(0);
	$im="hida";
//$target_path = "localhost/images/";
$imnam=$_FILES['image']['name'];
$imtmp=$_FILES['image']['tmp_name'];
// $target_path = $target_path .time(). basename( ); 
$imloc="images/".$imnam;
print_r($imloc);

move_uploaded_file($imtmp,$imloc);
$query="INSERT INTO market (`image`,`imgname`) 	VALUES ('$imloc','$im');";
mysql_query($query);
mysql_close();
?>
