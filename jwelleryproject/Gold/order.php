<html>
<head>
</head>
<body>
<h2 align="center"><em> Order Form</em></h2>
<?php
mysql_connect("localhost","root","");
mysql_select_db("jewellery");
$se=mysql_query("select * from goldprice");
while($ro=mysql_fetch_array($se))
	{ 
	       $xyz=$ro['rid'];
		   $a8=$ro['name'];
	       $name1=$ro['price'];
	}
?>	
<?php
mysql_connect("localhost","root","");
mysql_select_db("jewellery");
$sel=mysql_query("select * from user ");
  while($row=mysql_fetch_array($sel))
	{ 
	   $id=$row['user_id'];
	   $a=$row['username'];
       $b=$row['address'];
       $c=$row['city'];
       $d=$row['phone'];
       $e=$row['email'];   
     }
?>

<form action="#" method="post">
<table width="100%" border="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="top">
	<table width="47%" height="103" border="0">
      <tr>
        <td colspan="3" align="center">Jewellary Information </td>
        </tr>
	<tr>
        <td width="47%">User Name ID</td>
        <td width="3%">:</td>
        <td width="50%"><input type="text" name="user_id" value="<?php echo $id; ?>"></td>
      </tr>
	      <tr>
			<td width="47%">Product Name ID</td>
			<td width="3%">:</td>
			<td width="50%"><input type="text" name="rid" value="<?php echo $xyz; ?>"></td>
		  </tr>
		  
      <tr>
        <td width="47%">User Name</td>
        <td width="3%">:</td>
        <td width="50%"><input type="text" name="name" value="<?php echo $a; ?>"></td>
      </tr>
	  <tr>
			<td width="47%">Product Name </td>
			<td width="3%">:</td>
			<td width="50%"><input type="text" name="name" value="<?php echo $a8; ?>"></td>
		  </tr>
		  <tr>
			<td width="47%">Price</td>
			<td width="3%">:</td>
			<td width="50%"><input type="text" name="price" value="<?php echo $name1; ?>"></td>
		  </tr>
		  
		  
      <tr>
        <td>Address</td>
        <td>:</td>
        <td><input type="text" name="address" value="<?php echo $b; ?>"></td>
      </tr>
	  <tr>
        <td>City</td>
        <td>:</td>
        <td><input type="text" name="city" value="<?php echo $c; ?>"></td>
      </tr>
	  <tr>
        <td>Mobile Number</td>
        <td>:</td>
        <td><input type="text" name="mno" value="<?php echo $d; ?>"></td>
      </tr>
	  <tr>
        <td>E-mail</td>
        <td>:</td>
        <td><input type="text" name="email" value="<?php echo $e; ?>"></td>
      </tr>
	  <tr>
        <td>Select Bank</td>
        <td>:</td>
        <td>
		               
					        <select name="bank" >
								<option value="">Select Bank</option>				
								<option value="SBI">SBI</option>
								<option value="ICICI">ICICI</option>
								<option value="Axis">Axis Bank</option>
							</select>
										
        </td>
</tr>
</table>
<input type="Submit" name="sub" value="Submit"/>
</form>
<?php                     
		
		if(isset($_POST["sub"]))
		{
            $con=mysql_connect('localhost','root','');
            $db_selected=mysql_select_db("jewellery",$con);
            $mysql="INSERT INTO order2(user_id,rid,bank) VAlUES ('".$_POST['user_id']."','".$_POST['rid']."','".$_POST['bank']."')";
            if(!mysql_query($mysql,$con))
			{
			  die('<br> Error:<br>'.mysql_error());
			}
			  else
			  echo "<br> Record Added";
			  mysql_close($con);
		}
?>
</body>
</html>