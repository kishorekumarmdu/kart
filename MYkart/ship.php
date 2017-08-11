<?php 
 $db = mysql_connect("localhost", "root","user") or die(mysql_error());
	mysql_select_db("tce", $db) or die(mysql_error());
//error_reporting(0);
session_start();
$prodname=$_SESSION['prodname'];
   $name=$_POST["shipname"];
   $shipaddr=$_POST["shipaddr"];
   $email=$_POST["email"];
   $pin=$_POST["pin"];
   $phno=$_POST["phno"];
   $query="INSERT INTO cart( `name`,`prodname`,`address`,`email`,`pin`,`phno`) VALUES ('$name','$prodname','$shipaddr','$email','$pin','$phno');";
  	mysql_query($query);
	header("location:mainindex.php");
	mysql_close();
?>