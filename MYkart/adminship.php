<html>
<head>
<style type="text/css">
body {
	background:#fdf5e6;
	color: #000;
}
#img1{opacity:0.5; 
position:center;
}
b{
	font-size: 18px;
	font-style:italic;
	color: #606;
	
	}
p{
	font-size: 18px;
	font-family: Tahoma, Geneva, sans-serif;
	color: #606;
	font-weight: bold;
}
.navin {
	font-family: "Montserrat",sans-serif;
	font-size:15px;
	color: #000;
	border-style:solid;
	border-color:darkred
}
a:link {color: #000000;

}
a:hover {color: red;
background-color:white;
border-style:solid;
border-color:white;
text-decoration:none;
padding:5px 5px;
display:inline-block
}
a:active {color: grey;
          text-decoration:none}
.text {
	text-align: right;
	font-family: "Montserrat", sans-serif;
	font-size:15px;
	border-style:solid;
	border-color:darkred;
}
#tab1{ 
border-style:solid;
border-color:darkred;
background-color:red; }
}
#col1{text-align:right;
    border-style:solid;
	border-color:#ff6347;
	color: #FFF;
	font-weight: bold;}
#tab0{
	border-style:solid;
	border-color:darkred;
	}
#col0{
	border-style:solid;
	border-color:#ff6347;
	color: #FFF;
	font-weight: bold;
	
	}	
	#cattab{border-style:groove;
	border-width:3px;
	border-color:black;
	background-color:red}
#t1{
	font-style:italic;
	background-color:white;
	top: auto;
	font-weight: normal;
	}
.cash {
	font-size: 24px;
}
.cash {
	font-size: 36px;
}
.cart {
	font-weight: bold;
}
</style>
</head>
<body>

<p id="t1"><?php  session_start(); error_reporting(0); $name=$_SESSION['name']; $email=$_SESSION['email']; $phno=$_SESSION['phno']; if(isset($email)){ echo $email;} else{ echo "xxxxxx@tce.edu"; } ?><span style="display:inline-block;width:980px;"></span><?php  if(isset($phno)){ echo $phno;} else{ echo "+919876543210"; } ?></p> 
<table width="1350" height="71" id="tab1" style="line-height:none">
  <tr>
    <td width="129" height="59"  id ="col0" style="text-align:center"><a href="mainindex.php">HOME</a></td>
    <td  id ="col0" width="155" style="text-align:center"><a>FAQ</a></td></td>
    
    <td id ="col0" width="152" style="text-align:center"><a>CONTACTUS</a></td>
    <td id ="col0" width="165" style="text-align:center"><a>ABOUT</a></td>
     <td id ="col0" width="165" style="text-align:center"><?php  error_reporting(0); $adname=$_SESSION['adname']; if(isset($adname)){ echo '<a href="admin.php">';}else{ echo '<a href="adminlogin.php">'; } ?> 
ADMIN</a></td>
   
    <td id ="col0" width="547" style="text-align:right"><?php  error_reporting(0); if(isset($name)||(isset($adname))){ echo '<a>Welcome'.$name.$adname.'</a><a href="logout.php">Logout</a>';} else{ echo '<a href="login.html">Login</a><a href="register.html" style="padding:10px">SignUp</a>';}?></span></td>
     
    
  </tr>
</table>

<table width="1350" height="122" border="0">
  <tr>
    <td width="417" background="online-shopping2.jpg" style="background-position:center"></td>
    <td width="494" background="Online-Retails.jpg" style="background-position:center">&nbsp;</td>
    <td width="425" bordercolor="#fdf5e6" background="shop22.jpg" style="background-position:center">&nbsp;</td>
  </tr>
</table>
<span style="display:inline-block;width:600px;"></span><img  id="img1" src="kart.png" width="161" height="60">
<table width="1354" height="1173" border="0">
  <tr>
    <td width="255" height="1169" valign="top">
    <table width="255" height="273" border="1" style="border-color:black; font-weight: bold; color: #FFF; font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;" id="cattab" valign="top">
  <tr style="border-style:solid; text-align: center;">
    <td height="54"><a>Home&amp;Furnitures</a></td>
  </tr>
  <tr style="border-style:solid">
    <td height="52" style="text-align: center"><a>Electronics</a></td>
  </tr>
  <tr>
    <td height="51" style="text-align: center"><a>Books&amp;Media</a></td>
  </tr>
  <tr>
    <td height="53" style="text-align: center"><a>Clothings</a></td>
  </tr>
  <tr>
    <td style="text-align: center"><a>Footwears</a></td>
  </tr>
</table>
</td>
     <td width="1077" valign="top" style="text-align:center">
	 <form method="post" action="shipall.php">
     	<table  width="1086" bgcolor="#FFCCFF" height="270" border ="1" bordercolor="#9966CC"style="text-align:center">
    <tr height="40">
    <td width="181"  ><p>Shipping Products</p></td>
     <td width="143"  ><p>Name</p></td>
    <td width="238"  ><p>Address</p></td>
    <td width="147"  ><p>Pincode</p></td>
    <td width="228"  ><p>PhNo</p></td>
	 <td width="103"  > <input type="submit" value="ship" ></td>  
	
    <td width="8"  ><p></p></td>
    </tr>
    
   
	  <?php 
 $db = mysql_connect("localhost", "root","user") or die(mysql_error());
	mysql_select_db("tce", $db) or die(mysql_error());
 $query="select * from cart;";
 $result=mysql_query($query,$db);
while($rows=mysql_fetch_array($result)){
?>  
  <tr height="40"  >
    <td width="181"  ><b><?php echo $rows['2']; ?></b></td>
    <td width="143"  ><b><?php echo $rows['1']; ?></b></td>
    <td width="238"  ><b><?php echo $rows['3']; ?></b></td>
    <td width="147"  ><b><?php echo $rows['5']; ?></b></td>
    <td width="228"  ><b><?php echo $rows['6']; ?></b></td>  
   <td width="103"></td>
    </tr>
	<?php } ?>
    
	
    <tr></tr>
    
    </table></form>
     </td>
  </tr>
</table>

<table width="1354" height="45" border="0" bgcolor="#FF0000" style="text-align:center;">
<tr><td width="305">
<footer class="clas" style="text-align:center; padding:20px; color: #FFF;" >Copyright2016</footer>
</td>
</tr></table>

<p>&nbsp;</p>
</body>
</html>


