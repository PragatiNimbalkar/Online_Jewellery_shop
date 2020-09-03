<html>
<head>
</head>
<body>
<form action="" method="post">
<table width="100%" border="0">
  <tr>
    <td width="23%">&nbsp;</td>
    <td colspan="3" valign="middle" align="center">Add Record </td>
    <td width="20%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="18%" valign="middle" align="right">Item Name </td>
    <td width="2%">:</td>
    <td width="37%"><input type="text" name="name"></td>
    <td>&nbsp;</td>
  </tr>
 
   <tr>
    <td>&nbsp;</td>
    <td width="18%" valign="middle" align="right">description</td>
    <td width="2%">:</td>
    <td width="37%"><input type="text" name="description"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td valign="middle" align="right">Price</td>
    <td>:</td>
    <td><input type="text" name="price"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td valign="middle" align="right">Available</td>
    <td>:</td>
    <td><input type="text" name="available"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td valign="middle" align="right">Weight</td>
    <td>:</td>
    <td><input type="text" name="weight"></td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td valign="middle" align="right">Delivery</td>
    <td>:</td>
    <td><input type="text" name="delivery"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" name="sub" value="Add"> 
      <a href="index.php" style="text-decoration:none;">Back</a> </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</form>
<?php
if(isset($_POST['sub']))
{
$con=mysql_connect("localhost","root","");
$db_selected=mysql_select_db("jewellery");
$mysql="INSERT INTO silverprice(name,description,price,available,weight,delivery) values('".$_POST['name']."','".$_POST['description']."','".$_POST['price']."','".$_POST['available']."','".$_POST['weight']."','".$_POST['delivery']."')";
mysql_query($mysql,$con);
mysql_close($con);
} 
?>
</body>
</html>