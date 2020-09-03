<html>
<head>
</head>
<body>
<h2 align="center"><em> Order Form</em></h2>
<?php
mysql_connect("localhost","root","");
mysql_select_db("jewellery");
$sel=mysql_query("select * from goldprice");
while($row=mysql_fetch_array($sel))
	{ 
	       $id1=$row['rid'];
	}
	
?>	
<form action="#" method="post">
<table width="100%" border="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
<tr>
        <td width="47%">Product Name ID</td>
        <td width="3%">:</td>
        <td width="50%"><input type="text" name="pname1" value="<?php echo $id1; ?>"></td>
      </tr>
	  </table>
	  
<input type="Submit" name="sub" value="submit"/>
</body>
</form>
</html>