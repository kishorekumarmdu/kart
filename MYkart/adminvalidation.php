<?php 
if($_POST['LOGIN']){
 $us=$_POST['username'];
 $pwd=$_POST['password'];}
 if((strcmp($us,"adminnavin")==0)&&(strcmp($pwd,"navincharan463")==0))
 {
 echo '<script language="javascript">';
 echo 'alert("successfully logged in..Welcome to our KART")';
	echo '</script>';
	session_start();
 $_SESSION['adname']=$us;
 $_SESSION['email']="navin.charan1997@gmail.com";
 $_SESSION['phno']="9876543210";
  header("refresh:0;url=admin.php");
	 }else{
	  echo '<script language="javascript">';
 echo 'alert("wrongpassword...you are not my admin")';
	echo '</script>';

header("refresh:0;url=mainindex.php");
	 }
?>