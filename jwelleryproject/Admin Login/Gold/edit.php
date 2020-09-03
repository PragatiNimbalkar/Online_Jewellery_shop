<?php
mysql_connect("localhost","root","");
mysql_select_db("jewellery");
//select record
$result=mysql_query("SELECT * FROM goldprice where rid=".$_GET['id']."");
while($row=mysql_fetch_array($result))
{
echo "<br>";
$a=$row['name'];
$b=$row['gcarte'];
$c=$row['dcarte'];
$d=$row['price'];
$e=$row['available'];
$g=$row['weight'];
$h=$row['delivery'];
echo "<br>";
}
?>
<html>
<head>
</head>

<body>
<table width="100%" border="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="100%" border="0">
  <tr>
    <td align="center" valign="middle">Edit Record </td>
    </tr>
</table>
</td>
  </tr>
  <tr>
    <td>
          <form name="form1" method="post" action="" >
	
        <table width="100%" border="0">
  <tr>
    <td width="20%">&nbsp;</td>
    <td width="20%">
	
		</td>
    <td width="2%">&nbsp;</td>
    <td width="38%">&nbsp;</td>
    <td width="20%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Item Name </td>
    <td>:</td>
    <td><input type="text" name="name" value="<?php  echo $a;?>" ></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Gold Carte</td>
    <td>:</td>
    <td><input type="text" name="gcarte" value="<?php  echo $b;?>" ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Price</td>
    <td>:</td>
    <td><input type="text" name="dcarte" value="<?php  echo $c;?>" ?></td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>Price</td>
    <td>:</td>
    <td><input type="text" name="price" value="<?php  echo $d;?>" ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Available</td>
    <td>:</td>
    <td><input type="text" name="available" value="<?php  echo $e;?>" ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Weight</td>
    <td>:</td>
    <td><input type="text" name="weight" value="<?php  echo $g;?>" ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Delivery</td>
    <td>:</td>
    <td><input type="text" name="delivery" value="<?php  echo $h;?>" ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" name="sub" value="Add">
      <a href="index.php" style="text-decoration:none;">User List</a></td>
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
        </td>
</tr>
<tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
<?php
if(isset($_POST['sub']))
{
$sql=("update goldprice set name='".$_POST['name']."',gcarte='".$_POST['gcarte']."',dcarte='".$_POST['dcarte']."',price='".$_POST['price']."',available='".$_POST['available']."',weight='".$_POST['weight']."',delivery='".$_POST['delivery']."' where rid=".$_GET['id']."");
if(!mysql_query($sql))
{
die ('<br> Error:<br>'.mysql_error());
}
else
echo "<br> Record Updated <br>";
}
?>