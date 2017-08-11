<?php
 $db = mysql_connect("localhost", "root","user") or die(mysql_error());
	mysql_select_db("tce", $db) or die(mysql_error());
if($_POST['LOGIN'])
 $us=$_POST['username'];
 $pwd=$_POST['password'];
  $query="select * from user where name like '$us' and password like '$pwd';";
  
   
   $result=mysql_query($query,$db);

  $rows=mysql_fetch_assoc($result);
  
   $rownum=mysql_num_rows($result);
   
   if($rownum>0){
	   
	   $res=1;
   }
   else{
	   $res=0;
   }
   
 mysql_close();
 session_start();
 

 if($res==0){ 
 echo '<script language="javascript">';
 echo 'alert("wrongpassword")';
	echo '</script>';

header("refresh:0;url=login.html"); 
}
 else { 
   echo '<script language="javascript">';
 echo 'alert("successfully logged in..Welcome to our KART")';
	echo '</script>';
	
 $_SESSION['name']=$us;
 $_SESSION['email']=$rows['email'];
 $_SESSION['phno']=$rows['phno'];
  header("refresh:0;url=mainindex.php");
 } 
 ?> 
