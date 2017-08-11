<?php 
 $db = mysql_connect("localhost", "root","user") or die(mysql_error());
	mysql_select_db("tce", $db) or die(mysql_error());
 $query="select * from market where category=4;";
 $result=mysql_query($query,$db);
?>
<htm
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
p{
	font-size: 18px;
	font-weight: bold;
	font-family: Tahoma, Geneva, sans-serif;
	color: #606;
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
    <td  id ="col0" width="155" style="text-align:center"><a href="faq.php">FAQ</a></td></td>
    
    <td id ="col0" width="152" style="text-align:center"><a href="contact.php">CONTACTUS</a></td>
    <td id ="col0" width="165" style="text-align:center"><a href="about.php">ABOUT</a></td>
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
    <td height="54"><a href="homes.php">Home&amp;Furnitures</a></td>
  </tr>
  <tr style="border-style:solid">
    <td height="52" style="text-align: center"><a href="electronics.php">Electronics</a></td>
  </tr>
  <tr>
    <td height="51" style="text-align: center"><a href="books.php">Books&amp;Media</a></td>
  </tr>
  <tr>
    <td height="53" style="text-align: center"><a href="cloth.php">Clothings</a></td>
  </tr>
  <tr>
    <td style="text-align: center"><a href="footwears.php">Footwears</a></td>
  </tr>
</table>
</td>
     <td width="1077" valign="top">
	 <?php  while($rows=mysql_fetch_array($result)){
	$sal=$rows['4'];  $num=(int)$sal;
 ?>
	 <table  width="1086" height="270" border ="1">
    <tr>
    <td width="249" height="200" ><img src=<?php echo $rows['1']; ?> width="249" height="260";</td>
    <td width="461" bgcolor="#FFCCFF" valign="top"  > <p style="text-align:center; font-size: 24px; padding-top:10px; "><?php error_reporting(0); session_start(); $_SESSION['prodname']=$rows['2']; echo $rows['2']; ?></p> <span style="display:inline-block;width:60px;"></span><p style="text-align:justify; color: #333; font-weight: normal; font-style: italic;"><?php echo $rows['3']; ?></p></td>
   <td width="355" bgcolor="#FFCCFF">
 <p class="cash" style="text-align:center; ">Rs. <?php echo $rows['4']; ?></p><p style="text-decoration:line-through; text-align:center">Rs.<?php echo $num+1234; ?></p><span style="display:inline-block;width:100px;"></span>
<a href="cart.php" style="padding:5px 5px; text-align:center; background-color:yellow; color: #000000; font-size: 24px;">Add to Cart</a>
 </td> 
	 </tr></table>  <?php } ?></td>
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
