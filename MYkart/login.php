<?php
 $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'TceNet';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
   
 
  
   $us=$_POST["user"];
   $pwd=$_POST["user_pass"];
   $query="select username from nssreg where username like '$us' and password like '$pwd';";
   $q="use Tcenet";
   mysqli_query($conn,$q);
   $result=mysqli_query($conn,$query);
   $rownum=mysqli_num_rows($result);
   if($rownum>0){
	   
	   echo "1";
   }
   else{
	   echo "0";
   }
  
	 
    
	
 
   mysqli_close($conn);
?>
