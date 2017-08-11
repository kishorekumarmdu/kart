<?php
 $db = mysql_connect("localhost", "root","user") or die(mysql_error());
	mysql_select_db("tce", $db) or die(mysql_error());
	error_reporting(0);
	$category=$_POST['categ'];
	$title=$_POST['prodtitle'];
	$descr=$_POST['descrip'];
	$price=$_POST['price'];
//$target_path = "localhost/images/";
$imnam=$_FILES['image']['name'];
$imtmp=$_FILES['image']['tmp_name'];
// $target_path = $target_path .time(). basename( ); 
$imloc="images/".$imnam;
print_r($imloc);

move_uploaded_file($imtmp,$imloc);
$query="INSERT INTO market (`image`,`title`,`descrip`,`price`,`category`) VALUES ('$imloc','$title','$descr','$price','$category');";
 header('location:admin.php');
 
mysql_query($query);
mysql_close();
?>
