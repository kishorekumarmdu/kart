<?php
$db = mysql_connect("localhost", "root","user") ;
	mysql_select_db("tce", $db);
   
   
 error_reporting(0);
 
   $name=$_POST["username"];
   $pwd=$_POST["password"];
   $email=$_POST["email"];
   $phno=$_POST["phno"];
  // $query="INSERT INTO useR( `name`,`email`,`password`,`phno`) VALUES ('$name','$email','$pwd','$phno');";
  $query="INSERT INTO user( `name`,`email`,`password`,`phno`) VALUES ('$name','$email','$pwd','$phno');";
  mysql_query($query);
	  echo '<script language="javascript">';
 echo 'alert("successfully registered..you can login now!!")';
	echo '</script>';
	session_start();
	unset($_SESSION['name']);
  header("refresh:0;url=mainindex.php");
 
  
  mysql_close();
?>