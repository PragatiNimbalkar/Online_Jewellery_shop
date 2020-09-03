<!DOCTYPE html>
<html>
<head>
</head>
<body bgcolor="#FFFFFF">
<table width="1344" height="90" border="1">
  <tr>
    <td height="84" colspan="2" bgcolor="#993366"><div align="center"><a href="index.php">
      <input name="button2" type="button" value="Gold" size="50" />
      </a><a href="../Silver/index.php">
        <input name="button2" type="button" value="Silver" size="50" />
        </a> <a href="../Diamond/index.php">
          <input name="button2" type="button" value="Diamond" size="50" />
          </a> <a href="../logout.php">
            <input name="button2" type="button" value="Logout" size="50" />
          </a></div></td>
  </tr>
</table>
<p><a href="../dashboard.php">
  <input type="button" name="button" value="Back">
  </a>
</p>
<table width="100%" border="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><table width="100%" border="1">
      <tr>
        <td colspan="6">&nbsp;</td>
        <td><a href="add.php">Add +</a></td>
        <td>&nbsp;</td>
		<td>&nbsp;</td>
      </tr>
      <tr>
        <td width="7%">Sr.No.</td>
        <td width="32%">Item Name </td>
        <td width="25%">Gold Carte</td>
        <td width="14%">Diamond Carte</td>
			<td width="7%">Weight</td>
		<td width="7%">Price</td>
        <td width="5%">Available</td>
		<td width="5%">Delivery</td>
        <td width="5%">View</td>
        <td width="7%">Edit</td>
        <td width="5%">Delete</td>
      </tr>
	  
	  <?php
mysql_connect("localhost","root","");
mysql_select_db("jewellery");
$sel=mysql_query("select * from goldprice");
$i=0;
while($row=mysql_fetch_array($sel))
{	  
$i++;
     echo " <tr>
        <td>$i</td>
        <td>".$row['name']."</td>
        <td>".$row['gcarte']."</td>
		 <td>".$row['dcarte']."</td>
		 <td>".$row['weight']."</td>
        <td>".$row['price']."</td>
          <td>".$row['available']."</td>
             <td>".$row['delivery']."</td>
      
    <td><a href=\"view.php?id=".$row['rid']."\" >V</a></td>
        <td><a href=\"edit.php?id=".$row['rid']."\" >E</a></td>
        <td><a href=\"delete.php?id=".$row['rid']."\" >D</a></td>
      </tr>";
	  }
	  
	  ?>
    </table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="4%">&nbsp;</td>
    <td width="90%">&nbsp;</td>
    <td width="6%">&nbsp;</td>
  </tr>
</table>

</body>
</html>
