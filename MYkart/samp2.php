<?php 
$db = mysql_connect("localhost", "root","user") or die(mysql_error());
	mysql_select_db("tce", $db) or die(mysql_error());
	error_reporting(0);
	$product=mysql_query("SELECT * FROM `market` where `image` like 'images/uvt16-thumbnail.jpg';");
	$srow = mysql_fetch_array($product);
?>
<html>
<head>
</head>
<body>
<img style="border:1px;" src="<?php echo $srow['0']; ?>" width="137" height="152" />
</body>
</html>