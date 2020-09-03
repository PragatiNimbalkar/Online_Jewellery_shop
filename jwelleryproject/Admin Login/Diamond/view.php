<?php
include("conn.php");
	$sel=mysql_query("select * from diamondprice where did=".$_GET['id']."");
 
	while($row=mysql_fetch_array($sel))
	{
	$a=$row['name'];
	$b=$row['gcarte'];
	$a1=$row['dcarte'];
	$b2=$row['price'];
	$b3=$row['available'];
	$b4=$row['weight'];
	$b5=$row['delivery'];
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
    <td align="center" valign="top"><table width="38%" height="103" border="1">
      <tr>
        <td colspan="3" align="center">User Information </td>
        </tr>
      <tr>
        <td width="47%">Item Name </td>
        <td width="3%">:</td>
        <td width="50%"><?php echo $a; ?></td>
      </tr>
      <tr>
        <td>Gold Carte</td>
        <td>:</td>
        <td><?php echo $b; ?></td>
      </tr>
	  <tr>
        <td width="47%">Diamond Carte</td>
        <td width="3%">:</td>
        <td width="50%"><?php echo $a1; ?></td>
      </tr>
      <tr>
        <td>Price</td>
        <td>:</td>
        <td><?php echo $b2; ?></td>
      </tr>
	   <tr>
        <td>Available</td>
        <td>:</td>
        <td><?php echo $b3; ?></td>
      </tr> 
	  <tr>
        <td>Weight</td>
        <td>:</td>
        <td><?php echo $b4; ?></td>
      </tr> 
	  <tr>
        <td>Delivery</td>
        <td>:</td>
        <td><?php echo $b5; ?></td>
      </tr> 
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><a href="index.php">Back</a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>

</body>
</html>
