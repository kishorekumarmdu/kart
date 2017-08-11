<?php 
 $db = mysql_connect("localhost", "root","user") or die(mysql_error());
	mysql_select_db("tce", $db) or die(mysql_error());
 $query="select * from cart;";
 $result=mysql_query($query,$db);
while($rows=mysql_fetch_array($result)){
	echo $rows['2'];
}

?>