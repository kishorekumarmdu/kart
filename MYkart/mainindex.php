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
.marq {
	font-style: italic;
}
.fsd {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 16px;
}
.clas {
	color: #FFF;
}
</style>
</head>
<body>
<script type="text/javascript">
function indic(){
	 alert("you need to login to place your order");
}
</script>

<p id="t1">\<?php  session_start(); error_reporting(0); $name=$_SESSION['name']; $email=$_SESSION['email']; $phno=$_SESSION['phno']; if(isset($email)){ echo $email;} else{ echo "xxxxxx@tce.edu"; } ?><span style="display:inline-block;width:980px;"></span><?php  if(isset($phno)){ echo $phno;} else{ echo "+919876543210"; } ?></p> 
<table width="1350" height="71" id="tab1" style="line-height:none">
  <tr>
    <td width="129" height="59"  id ="col0" style="text-align:center"><a href="mainindex.php">HOME</a></td>
    <td  id ="col0" width="155" style="text-align:center"><a href="faq.php">FAQ</a></td></td>
    
    <td id ="col0" width="152" style="text-align:center"><a href="contact.php">CONTACTUS</a></td>
    <td id ="col0" width="165" style="text-align:center"><a href="about.php">ABOUT</a></td>
    <td id ="col0" width="165" style="text-align:center"><?php  error_reporting(0); $adname=$_SESSION['adname']; if(isset($adname)){ echo '<a href="admin.php">';}else{ echo '<a href="adminlogin.php">'; } ?> 
ADMIN</a></td>
   
    <td id ="col0" width="547" style="text-align:right"><?php  error_reporting(0); if(isset($name)){ echo '<a>Welcome'.$name.'</a><a href="logout.php">Logout</a>';} else{ echo '<a href="login.html">Login</a><a href="register.html" style="padding:10px">SignUp</a>';}?></span></td>
     
    
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
<marquee behavior="scroll"><p class="marq" style="font-size:20px"> <span class="fsd">Latest products..!Latest products..!Latest products..!</span></p></marquee>
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
     <table  width="1086" height="270" border ="1">
    <tr>
    <td width="249" height="200" ><img src="kids_saree_a140_full_1.jpg" width="249" height="260";</td>
    <td width="461" bgcolor="#FFCCFF" valign="top"  > <p style="text-align:center; font-size: 24px; padding-top:10px; "> <?php error_reporting(0); session_start();$_SESSION['prodname']="kidssaree" ?>Kids Sarees</p> <span style="display:inline-block;width:60px;"></span><p style="text-align:justify; color: #333; font-weight: normal; font-style: italic;">Cuteness overloaded..!</p></td>
   <td width="355" bgcolor="#FFCCFF">
 <p class="cash" style="text-align:center; "> Rs.1568/-</p><p style="text-decoration:line-through; text-align:center">Rs.2000/-</p><span style="display:inline-block;width:100px;"></span>
 <a href="cart.php" style="padding:5px 5px; text-align:center; background-color:yellow; color: #000000; font-size: 24px;">Add to Cart</a>
 </td> 
    </tr></table>
    <table  width="1086" height="270" border ="1">
    <tr>
    <td width="249" height="200" ><img src="gsmarena_001.jpg"width="249" height="260";</td>
    <td width="461" bgcolor="#FFCCFF" valign="top"  > <p style="text-align:center; font-size: 24px; padding-top:10px; "> <?php error_reporting(0); session_start();$_SESSION['prodname']="wPhone " ?>Windows phone</p> <span style="display:inline-block;width:60px;"></span><p style="text-align:justify; color: #333; font-weight: normal; font-style: italic;">Having selfie with world's most high resolution cam Mobile</p></td>
   <td width="355" bgcolor="#FFCCFF">
 <p class="cash" style="text-align:center; "> Rs.25670/-</p><p style="text-decoration:line-through; text-align:center">Rs.30000/-</p><span style="display:inline-block;width:100px;"></span>
<a href="cart.php" style="padding:5px 5px; text-align:center; background-color:yellow; color: #000000; font-size: 24px;">Add to Cart</a>
 </td> 
    </tr></table> <table  width="1086" height="270" border ="1">
    <tr>
    <td width="249" height="200" ><img src="286366a.jpg" width="249" height="260";</td>
    <td width="461" bgcolor="#FFCCFF" valign="top"  > <p style="text-align:center; font-size: 24px; padding-top:10px; "> <?php error_reporting(0); session_start();$_SESSION['prodname']="Ramayana book" ?>The Holy Ramayana</p> <span style="display:inline-block;width:60px;"></span><p style="text-align:justify; color: #333; font-weight: normal; font-style: italic;"> Life History of king Rama and kingdom Ayodhya</p></td>
   <td width="355" bgcolor="#FFCCFF">
 <p class="cash" style="text-align:center; "> Rs.356/-</p><p style="text-decoration:line-through; text-align:center">Rs.500/-</p><span style="display:inline-block;width:100px;"></span>
<a href="cart.php" style="padding:5px 5px; text-align:center; background-color:yellow; color: #000000; font-size: 24px;">Add to Cart</a>
 </td> 
    </tr></table>
    <table  width="1086" height="270" border ="1">
    <tr>
    <td width="249" height="200" ><img src="10325010_hi.jpg" width="249" height="260";</td>
    <td width="461" bgcolor="#FFCCFF" valign="top"  > <p style="text-align:center; font-size: 24px; padding-top:10px; "> <?php error_reporting(0); session_start();$_SESSION['prodname']="Tshirt " ?>T-Shirts</p> <span style="display:inline-block;width:60px;"></span><p style="text-align:justify; color: #333; font-weight: normal; font-style: italic;"> Half sleeve V-neck tshirts</p></td>
   <td width="355" bgcolor="#FFCCFF">
 <p class="cash" style="text-align:center; "> Rs.756/-</p><p style="text-decoration:line-through; text-align:center">Rs.800/-</p><span style="display:inline-block;width:100px;"></span>
<a href="cart.php" style="padding:5px 5px; text-align:center; background-color:yellow; color: #000000; font-size: 24px;">Add to Cart</a>
 </td> 
    </tr></table>
    <table  width="1086" height="270" border ="1">
    <tr>
    <td width="249" height="200" ><img src="Firdous-Cloth-Mills-Eid-Wear-For-Women-6.jpg" width="249" height="260";</td>
    <td width="461" bgcolor="#FFCCFF" valign="top"  > <p style="text-align:center; font-size: 24px; padding-top:10px; "> <?php error_reporting(0); session_start();$_SESSION['prodname']="Firdous-Cloth-Mills-Eid-Wear-For-Women" ?>Firdous-Cloth-Mills-Eid-Wear-For-Women</p> <span style="display:inline-block;width:60px;"></span><p style="text-align:justify; color: #333; font-weight: normal; font-style: italic;">Brand new stylish cloth</p></td>
   <td width="355" bgcolor="#FFCCFF">
 <p class="cash" style="text-align:center; "> Rs.2567/-</p><p style="text-decoration:line-through; text-align:center">Rs.3000/-</p><span style="display:inline-block;width:100px;"></span>
<a href="cart.php" style="padding:5px 5px; text-align:center; background-color:yellow; color: #000000; font-size: 24px;">Add to Cart</a>
 </td> 
    </tr></table>
    <table  width="1086" height="270" border ="1">
    <tr>
    <td width="249" height="200" ><img src="iphone-6-458159_960_720.jpg" width="249" height="260";</td>
    <td width="461" bgcolor="#FFCCFF" valign="top"  > <p style="text-align:center; font-size: 24px; padding-top:10px; "> <?php error_reporting(0); session_start();$_SESSION['prodname']="iPhone" ?>Apple iPhone</p> <span style="display:inline-block;width:60px;"></span><p style="text-align:justify; color: #333; font-weight: normal; font-style: italic;">High speed performance on ioS</p></td>
   <td width="355" bgcolor="#FFCCFF">
 <p class="cash" style="text-align:center; "> Rs.75607/-</p><p style="text-decoration:line-through; text-align:center">Rs.80000/-</p><span style="display:inline-block;width:100px;"></span>
<a href="cart.php" style="padding:5px 5px; text-align:center; background-color:yellow; color: #000000; font-size: 24px;">Add to Cart</a>
 </td> 
    </tr></table>
    </td>
  </tr>
  <tr>
  <td>
  
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
