<?php 
session_start();
 echo '<script language="javascript">';
 echo 'alert("successfully logged out..")';
	echo '</script>';
unset($_SESSION['name']); 

unset($_SESSION['email']); 
unset($_SESSION['phno']); 
 
unset($_SESSION['adname']); 
header ("refresh:0;url=mainindex.php");
?>