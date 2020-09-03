<?php
mysql_connect("localhost","root","");
mysql_select_db("jewellery");
if(mysql_query("delete from goldprice where rid=".$_GET['id'].""))
header("location:index.php");
else
echo mysql_error();
?>