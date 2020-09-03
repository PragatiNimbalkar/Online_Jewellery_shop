<?php
mysql_connect("localhost","root","");
mysql_select_db("jewellery");

	$sel=mysql_query("select * from silverprice where sid=".$_GET['id']."");
 
	while($row=mysql_fetch_array($sel))
	{
	   $a=$row['name'];
       $b=$row['description'];
       $c=$row['price'];
       $d=$row['available'];
       $e=$row['weight'];
	   $f=$row['delivery'];
	   
	   
     }
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<table width="100%" border="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="top"><table width="38%" height="103" border="0">
      <tr>
        <td colspan="3" align="center">Jewellary Information </td>
        </tr>
      <tr>
        <td width="47%">Jewellery Name</td>
        <td width="3%">:</td>
        <td width="50%"><?php echo $a; ?></td>
      </tr>
      <tr>
        <td>Description</td>
        <td>:</td>
        <td><?php echo $b; ?></td>
      </tr>

	  <tr>
        <td>Price</td>
        <td>:</td>
        <td><?php echo $c; ?></td>
      </tr>
	  <tr>
        <td>Availability</td>
        <td>:</td>
        <td><?php echo $d; ?></td>
      </tr>
	  <tr>
        <td>Weight</td>
        <td>:</td>
        <td><?php echo $e; ?></td>
      </tr>
	  	  <tr>
        <td>Delivery</td>
        <td>:</td>
        <td><?php echo $f; ?></td>
      </tr>
</table>	
       </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
<a href="order.php">
<input name="submit" type="submit" value="Order" /></a>
</p>
</body>
</html>