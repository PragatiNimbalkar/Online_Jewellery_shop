<?php
mysql_connect("localhost","root","");
mysql_select_db("jewellery");
$sel=mysql_query("select * from goldprice where rid=".$_GET['id']."");
while($row=mysql_fetch_array($sel))
	{
	       $name2=$row['name'];
	       $name1=$row['price'];
		   $id1=$row['rid'];
	}
	
?>	