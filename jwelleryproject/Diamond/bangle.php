
<html>
<head>

<title>Untitled Document</title>
<style>a:link {text-decoration:none;}</style>
</head>

<body>
<table width="1333" border="0" bgcolor="">
  <tr bgcolor="#f5daf3">
    <th width="345" height="148" scope="col"><img src="../Images/img/banner2-960x300.jpg" width="337" height="283" /></th>
    <th width="978" scope="col"><p align="center">&nbsp;</p>
      <img src="../Images/img/200px-Tanishq_Logo.svg.png" width="354" height="153" />
      <p align="center"><font size="6">Diamond Items</font></p>
    <p>&nbsp; </p></th>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td><p align="center"><a href="../home.php"><font size="4" color="#990099">Home</font></a></p>
       <p align="center"><font size="4"><a href="../Admin Login/index.php">Admin login </a> &nbsp;&nbsp;&nbsp; </font></p>
      <p align="center"><font size="4"><a href="../about.php">About Us </a> &nbsp;&nbsp;&nbsp; </font></p>
    <p align="center"><font size="4"><a href="../Gold/index.php">Gold Item </a> &nbsp;&nbsp;&nbsp; </font></p>
    <p align="center"><font size="4"><a href="../Silver/index.php">Silver Item </a>&nbsp;&nbsp;&nbsp; </font></p>
    <p align="center"><font size="4"><a href="index.php">Diamond Item </a>&nbsp;&nbsp;&nbsp; </font></p>
    <p align="center"><font size="4"><a href="../feedback.php">Feedback </a> </a></font></p></td>
    <td><table width="977" height="132" border="0">
      <tr>
        <th width="485" height="126" scope="col"><p><img src="../Images/Diamond/Bangles/4.jpg" width="295" height="205" /></p>
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
$sel=mysql_query("select * from  diamondprice WHERE `diamondprice`.`did` = 1");

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
		<td><a href=\"send.php?id=".$row['did']."\" style='color:#ff0000;'>Order</a></td>
        
        </tr>";
	  }
?>
            </table>
            </p>
          </div>
          <p>&nbsp;</p>
          <p>&nbsp;</p></th>
        <th width="482" scope="col"><p><img src="../Images/Diamond/Bangles/6.jpg" width="295" height="205" /></p>
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
$sel=mysql_query("select * from  diamondprice WHERE `diamondprice`.`did` = 2");

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
		<td><a href=\"send.php?id=".$row['did']."\" style='color:#ff0000;'>Order</a></td>
        
        </tr>";
	  }
?>
            </table>
            </p>
          </div>
          <p><a href="view1.php"></a></p>
          <p>&nbsp;</p>
          <p>&nbsp;</p></th>
      </tr>
    </table>
      <table width="978" height="137" border="0">
        <tr>
          <th width="477" scope="col"><p>&nbsp;</p>
            <p>&nbsp;</p>
            <p><img src="../Images/Diamond/Bangles/3.jpg" width="295" height="227"/></p>
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
$sel=mysql_query("select * from  diamondprice WHERE `diamondprice`.`did` = 3");

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
		<td><a href=\"send.php?id=".$row['did']."\" style='color:#ff0000;'>Order</a></td>
        
        </tr>";
	  }
?>
              </table>
              </p>
            </div>
            <p><a href="view1.php"></a></p>
            <p>&nbsp;</p>
          <p>&nbsp;</p></th>
          <th width="491" scope="col"><p><img src="../Images/Diamond/Bangles/11.jpg" width="295" height="205" /></p>
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
$sel=mysql_query("select * from  diamondprice WHERE `diamondprice`.`did` = 4");

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
		<td><a href=\"send.php?id=".$row['did']."\" style='color:#ff0000;'>Order</a></td>
        
        </tr>";
	  }
?>
              </table>
              </p>
            </div>
            <p><a href="view1.php"></a></p>
        <p><a href="view1.php"></a></p>        </tr>
      </table>
      <p>&nbsp;</p>      </td>
  </tr>
  <tr bgcolor="">
    <td><div align="center">
      <p><strong>Diamond Type </strong></p>
      <p><a href="bangle.php">1.Bangles</a></p>
      <p><a href="earring.php">2.Earring</a></p>
      <p><a href="nacklace.php">3.Necklaces</a></p>
      <p><a href="nose.php">4.Nose Pin </a></p>
      <p><a href="lring.php">5.LadyRings</a></p>
      <p><a href="pendent.php">6.Pendants Set</a></p>
      <a href="pendantset.php"></a></div></td>
    <td><table width="974" height="185" border="0">
      <tr>
        <th width="482" scope="col"><p><img src="../Images/Diamond/Bangles/1.jpg" width="295" height="205" /></p>
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
$sel=mysql_query("select * from  diamondprice WHERE `diamondprice`.`did` = 5");

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
		<td><a href=\"send.php?id=".$row['did']."\" style='color:#ff0000;'>Order</a></td>
        
        </tr>";
	  }
?>
            </table>
            </p>
          </div>
          <p><a href="view1.php"></a></p>
          <p>&nbsp;</p></th>
        <th width="482" scope="col"><p><img src="../Images/Diamond/Bangles/8.jpg" width="295" height="205" /></p>
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
$sel=mysql_query("select * from diamondprice WHERE `diamondprice`.`did` = 6");

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
		<td><a href=\"send.php?id=".$row['did']."\" style='color:#ff0000;'>Order</a></td>
        
        </tr>";
	  }
?>
            </table>
            </p>
          </div>
          <p><a href="view1.php"></a></p>
          <p>&nbsp;</p></th>
      </tr>
    </table>
    <p align="center">&nbsp;</p>
      <p align="center">&nbsp;</p>
      <p align="center">&nbsp;</p></td>
  </tr>
</table>
</body>
</html>
