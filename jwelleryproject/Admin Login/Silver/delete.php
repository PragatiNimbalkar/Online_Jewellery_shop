<?php
mysql_connect("localhost","root","");
mysql_select_db("jewellery");
if(mysql_query("delete from silverprice where sid=".$_GET['id'].""))
header("location:index.php");
else
echo mysql_error();
?>