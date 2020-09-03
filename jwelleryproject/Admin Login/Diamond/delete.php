<?php
mysql_connect("localhost","root","");
mysql_select_db("jewellery");
if(mysql_query("delete from diamondprice where did=".$_GET['id'].""))
header("location:index.php");
else
echo mysql_error();
?>