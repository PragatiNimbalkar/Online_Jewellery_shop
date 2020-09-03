<?php 
mysql_connect("localhost","root","");
mysql_select_db("jewellery");
function sel_row()
{
$sel=mysql_query("select * from diamondprice");
	$i=0;
	while($row=mysql_fetch_array($sel))
	{
	$i++;
 echo " <tr>
        <td>$i</td>
        <td>".$row['name']."</td>
        <td>".$row['gcarte']."</td>
		<td>".$row['dcarte']."</td>
        <td>".$row['price']."</td>
		 <td>".$row['weight']."</td>
	    <td>".$row['available']."</td>
         <td>".$row['delivery']."</td>			
        <td><a href=\"usr_list.php?page=viw&rid=".$row['did']."\">V</a></td>
        <td><a href=\"usr_list.php?page=edt&rid=".$row['did']."\">E</a></td>
        <td><a href=\"usr_list.php?page=del&rid=".$row['did']."\">D</a></td>
      </tr>";
	  }

}
function del_row()
{
if(mysql_query("delete from diamondprice where id=".$_GET['did']))
header("location:usr_list.php");
else
echo mysql_error();

}
function viw_row()
{
	$sel=mysql_query("select * from diamondprice where id=".$_GET['did']."");
 
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
<table width="38%" height="103" border="1">
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
        <td width="47%">diamond Carte</td>
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
    </table>
<?php

}

?>