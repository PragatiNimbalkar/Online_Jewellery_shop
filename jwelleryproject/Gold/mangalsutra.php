
<html>
<head>

<title>Untitled Document</title>
<style>a:link {text-decoration:none;}</style>
</head>

<table width="1159" border="0" bgcolor="">
  <tr bgcolor="#f5daf3">
    <th width="294" height="148" scope="col"><img src="../Images/img/banner2-960x300.jpg" width="294" height="269" /></th>
    <th width="836" scope="col"><p align="center"><img src="../Images/img/200px-Tanishq_Logo.svg.png" width="200" height="131" /></p>
      <p align="center"><font size="6">Gold form</font></p>
    <p>&nbsp; </p></th>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td height="679"><p align="center">&nbsp;</p>
      <p align="center">&nbsp;</p>
      <p align="center">&nbsp;</p>
      <p align="center">&nbsp;</p>
      <p align="center">&nbsp;</p>
      <p align="center">&nbsp;</p>
      <p align="center">&nbsp;</p>
      <p align="center"><a href="../home.php"><font size="4" color="#990099">Home</font></a></p>
      <p align="center"><font size="4"><a href="../Admin Login/index.php">Admin login </a> &nbsp;&nbsp;&nbsp; </font></p>
       <p align="center"><font size="4"><a href="../about.php">About Us </a> &nbsp;&nbsp;&nbsp; </font></p>
       <p align="center"><font size="4"><a href="index.php">Gold Item </a> &nbsp;&nbsp;&nbsp; </font></p>
       <p align="center"><font size="4"><a href="../Silver/index.php">Silver Item </a>&nbsp;&nbsp;&nbsp; </font></p>
       <p align="center"><font size="4"><a href="../Diamond/index.php">Diamond Item </a>&nbsp;&nbsp;&nbsp; </font></p>
    <p align="center"><font size="4"><a href="../feedback.php">Feedback </a> </a></font></p></td>
    <td><table width="836" height="132" border="0">
      <tr>
        <th width="413" height="126" scope="col"><p><img src="../Images/Gold/Mangalsutra/11.jpg" width="295" height="205" /></p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>
          <div align="center">
<table width="227" height="69" border="1">
  <tr>
    <th width="60" height="63" scope="col">Item Name</th>
    <th width="60" scope="col">Gold Carte</th>
    <th width="71" scope="col">Diamond carte</th>
    <th width="71" scope="col">Weight</th>
    <th width="71" scope="col">Available</th>
    <th width="74" scope="col">Rs</th>
    <th width="74" scope="col">Delivery</th>
    <th width="74" scope="col">Order</th>
  </tr>
<?php
mysql_connect("localhost","root","");
mysql_select_db("jewellery");
$sel=mysql_query("select * from goldprice WHERE `goldprice`.`rid` = 1");
while($row=mysql_fetch_array($sel))
{	 
    echo " <tr>
        <td>".$row['name']."</td>
        <td>".$row['gcarte']."</td>
		<td>".$row['dcarte']."</td>
		<td>".$row['available']."</td>
		<td>".$row['weight']."</td>
		<td>".$row['price']."</td>
		<td>".$row['delivery']."</td>
		<td><a href=\"send.php?id=".$row['rid']."\" style='color:#ff0000;'>Order</a></td>
        
        </tr>";
	  }
?>
</table>
</p>
		  </div>
		  <p>&nbsp;</p>		  </th>
        <th width="413" scope="col"><p>&nbsp;</p>
          <p><img src="../Images/Gold/Mangalsutra/3.jpg" width="295" height="205" /></p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <div align="center">
            <table width="227" height="69" border="1">
              <tr>
                <th width="60" height="63" scope="col">Item Name</th>
                <th width="60" scope="col">Gold Carte</th>
                <th width="71" scope="col">Diamond carte</th>
                <th width="71" scope="col">Weight</th>
                <th width="71" scope="col">Available</th>
                <th width="74" scope="col">Rs</th>
                <th width="74" scope="col">Delivery</th>
                <th width="74" scope="col">Order</th>
              </tr>
              <?php
mysql_connect("localhost","root","");
mysql_select_db("jewellery");
$sel=mysql_query("select * from goldprice WHERE `goldprice`.`rid` = 2");

while($row=mysql_fetch_array($sel))
{	  

     echo " <tr>
        <td>".$row['name']."</td>
        <td>".$row['gcarte']."</td>
		<td>".$row['dcarte']."</td>
		<td>".$row['available']."</td>
		<td>".$row['weight']."</td>
		<td>".$row['price']."</td>
		<td>".$row['delivery']."</td>
		<td><a href=\"send.php?id=".$row['rid']."\" style='color:#ff0000;'>Order</a></td>
        
        </tr>";
	  }
?>
            </table>
            </p>
          </div>
          <p></p>
          <p>&nbsp;</p></th>
      </tr>
    </table>
      <table width="836" height="382" border="0">
        <tr>
          <th width="413" height="378" scope="col"><p><img src="../Images/Gold/Mangalsutra/15.jpg" width="295" height="205" align=""center"" /></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p>&nbsp;</p>
            <p align="center"><a href="view1.php"></a></p>
            <p align="center">&nbsp;</p>
            <p align="center">&nbsp;</p>
            <p align="center">&nbsp;</p>
            <table width="227" height="69" border="1">
              <tr>
                <th width="60" height="63" scope="col">Item Name</th>
                <th width="60" scope="col">Gold Carte</th>
                <th width="71" scope="col"><div align="center">Diamond carte</div></th>
                <th width="71" scope="col"><div align="center">Weight</div></th>
                <th width="71" scope="col">Available</th>
                <th width="74" scope="col">Rs</th>
                <th width="74" scope="col">Delivery</th>
                <th width="74" scope="col">Order</th>
              </tr>
              <?php
mysql_connect("localhost","root","");
mysql_select_db("jewellery");
$sel=mysql_query("select * from goldprice WHERE `goldprice`.`rid` = 3");

while($row=mysql_fetch_array($sel))
{	  

     echo " <tr>
        <td>".$row['name']."</td>
        <td>".$row['gcarte']."</td>
		<td>".$row['dcarte']."</td>
		<td>".$row['available']."</td>
		<td>".$row['weight']."</td>
		<td>".$row['price']."</td>
		<td>".$row['delivery']."</td>
		<td><a href=\"send.php?id=".$row['rid']."\" style='color:#ff0000;'>Order</a></td>
        
        </tr>";
	  }
?>
          </table>            <p>&nbsp;</p></th>
          <th width="413" scope="col"><p><img src="../Images/Gold/Mangalsutra/6.jpg" width="295" height="205" align=""center""/></p>
            <p></p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <table width="413" height="69" border="1">
              <tr>
                <th width="40" height="63" scope="col">Item Name</th>
                <th width="38" scope="col">Gold Carte</th>
                <th width="64" scope="col"><div align="center">Diamond carte</div></th>
                <th width="48" scope="col">Weight</th>
                <th width="63" scope="col">Available</th>
                <th width="19" scope="col">Rs</th>
                <th width="58" scope="col">Delivery</th>
                <th width="31" scope="col">Order</th>
              </tr>
              <?php
mysql_connect("localhost","root","");
mysql_select_db("jewellery");
$sel=mysql_query("select * from goldprice WHERE `goldprice`.`rid` = 4");

while($row=mysql_fetch_array($sel))
{	  

     echo " <tr>
        <td>".$row['name']."</td>
        <td>".$row['gcarte']."</td>
		<td>".$row['dcarte']."</td>
		<td>".$row['available']."</td>
		<td>".$row['weight']."</td>
		<td>".$row['price']."</td>
		<td>".$row['delivery']."</td>
		<td><a href=\"send.php?id=".$row['rid']."\" style='color:#ff0000;'>Order</a></td>
        
        </tr>";
	  }
?>
            </table>
          <p>&nbsp;</p></th>
        </tr>
      </table>
      <p>&nbsp;</p>      </td>
  </tr>
  <tr bgcolor="">
    <td><div align="center">
      <p align="center"><strong>Gold Type </strong></p>
      
      <p align="center"><a href="bangle.php">1.Bangles</a></p> 
      <p align="center"><a href="earring.php">2.Earrings</a></p> 
      <p align="center"><a href="mangtika.php">3.Mangtica</a></p> 
      <p align="center"><a href="mangalsutra.php">4.Mangalsutra</a></p> 
      <p align="center"><a href="nacklaces.php">5.Necklaces</a></p> 
      <p align="center"><a href="pendantset.php">6.Pendantset</a></p>
      <p align="center"><a href="ring.php">7.Rings</a></p>
     </p>
    <a href="pendantset.php"></a></div></td>
    <td><table width="836" height="469" border="0">
      <tr>
        <th width="413" height="465" scope="col"><p><img src="../Images/Gold/Mangalsutra/5.jpg" width="295" height="205" align="center"/> </p>
          <div align="center">
            <table width="227" height="69" border="1">
              <tr>
                <th width="60" height="63" scope="col">Item Name</th>
                <th width="60" scope="col">Gold Carte</th>
                <th width="71" scope="col">Diamond carte</th>
                <th width="71" scope="col">Weight</th>
                <th width="71" scope="col">Available</th>
                <th width="74" scope="col">Rs</th>
                <th width="74" scope="col">Delivery</th>
                <th width="74" scope="col">Order</th>
              </tr>
              <?php
mysql_connect("localhost","root","");
mysql_select_db("jewellery");
$sel=mysql_query("select * from goldprice WHERE `goldprice`.`rid` = 5");

while($row=mysql_fetch_array($sel))
{	  

     echo " <tr>
        <td>".$row['name']."</td>
        <td>".$row['gcarte']."</td>
		<td>".$row['dcarte']."</td>
		<td>".$row['available']."</td>
		<td>".$row['weight']."</td>
		<td>".$row['price']."</td>
		<td>".$row['delivery']."</td>
		<td><a href=\"send.php?id=".$row['rid']."\" style='color:#ff0000;'>Order</a></td>
        
        </tr>";
	  }
?>
            </table>
            </p>
          </div>
          <p></p>
          <p>&nbsp;</p></th>
        <th width="413" scope="col"><p><img src="../Images/Gold/Mangalsutra/4.jpg" width="295" height="205" align="center"/></p>
          <div align="center">
            <table width="227" height="68" border="1">
              <tr>
                <th width="60" height="62" scope="col">Item Name</th>
                <th width="60" scope="col">Gold Carte</th>
                <th width="71" scope="col">Diamond carte</th>
                <th width="71" scope="col">Weight</th>
                <th width="71" scope="col">Available</th>
                <th width="74" scope="col">Rs</th>
                <th width="74" scope="col">Delivery</th>
                <th width="74" scope="col">Order</th>
              </tr>
              <?php
mysql_connect("localhost","root","");
mysql_select_db("jewellery");
$sel=mysql_query("select * from goldprice WHERE `goldprice`.`rid` = 6");

while($row=mysql_fetch_array($sel))
{	  

     echo " <tr>
        <td>".$row['name']."</td>
        <td>".$row['gcarte']."</td>
		<td>".$row['dcarte']."</td>
		<td>".$row['available']."</td>
		<td>".$row['weight']."</td>
		<td>".$row['price']."</td>
		<td>".$row['delivery']."</td>
		<td><a href=\"send.php?id=".$row['rid']."\" style='color:#ff0000;'>Order</a></td>
        </tr>";
	  }
?>
            </table>
            </p>
          </div>
          <p></p>
          <p><a href="view1.php"></a></p>
          <p>&nbsp;</p></th>
      </tr>
    </table>
    <p align="center">&nbsp;</p>    </td>
  </tr>
</table>
</body>
</html>
