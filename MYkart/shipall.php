<?php 
 $db = mysql_connect("localhost", "root","user") or die(mysql_error());
	mysql_select_db("tce", $db) or die(mysql_error());
  $query="delete from cart;";
  mysql_query($query);
	echo '<script language="javascript">';
 echo 'alert("Allproducts are shipped")';
	echo '</script>';
	header("refresh:0;url=adminship.php");
?>