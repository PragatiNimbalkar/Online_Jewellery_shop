
<html>
<head>

<title>Untitled Document</title>
<style>a:link {text-decoration:none;}</style>
</head>

<body>
<table width="1327" border="0">
  <tr bgcolor="#f5daf3">
    <th width="436" height="148" scope="col"><img src="../Images/img/banner2-960x300.jpg" width="436" height="291" /></th>
    <th width="881" scope="col"><p align="center">&nbsp;</p>
      <img src="../Images/img/200px-Tanishq_Logo.svg.png" width="354" height="153" />
      <p align="center"><font size="6">Silver Items</font></p>
    <p>&nbsp; </p></th>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td><p align="center">&nbsp;</p>
      <p align="center">&nbsp;</p>
      <p align="center">&nbsp;</p>
      <p align="center">&nbsp;</p>
      <p align="center">&nbsp;</p>
      <p align="center"><a href="../home.php"><font size="4" color="#990099">Home</font></a></p>
      <p align="center"><font size="4"><a href="../about.php">Admin login </a> &nbsp;&nbsp;&nbsp; </font></p>
      <p align="center"><font size="4"><a href="about.php">About Us </a> &nbsp;&nbsp;&nbsp; </font></p>
    <p align="center"><font size="4"><a href="../Gold/index.php">Gold Item </a> &nbsp;&nbsp;&nbsp; </font></p>
    <p align="center"><font size="4"><a href="index.php">Silver Item </a>&nbsp;&nbsp;&nbsp; </font></p>
    <p align="center"><font size="4"><a href="../Diamond/index.php">Diamond Item </a>&nbsp;&nbsp;&nbsp; </font></p>
    <p align="center"><font size="4"><a href="../feedback.php">Feedback </a> </a></font></p></td>
    <td><table width="873" height="132" border="0">
      <tr>
        <th width="483" height="126" scope="col"><p><img src="../Images/Silver/Anklets/15.jpg" width="295" height="205" /></p>
          <div align="center">
            <table width="227" height="69" border="">
              <tr>
                <th width="60" height="63" scope="col">Item Name</th>
                <th width="60" scope="col"><div align="center">Description</div></th>
                <th width="71" scope="col">Available</th>
                <th width="74" scope="col">Rs</th>
                <th width="69" scope="col">Weight</th>
                <th width="69" scope="col">delivety</th>
                <th width="74" scope="col">Order</th>
              </tr>
              <?php
                     mysql_connect("localhost","root","");
                     mysql_select_db("jewellery");
                     $sel=mysql_query("select * from silverprice WHERE `silverprice`.`sid` = 44");

                      while($row=mysql_fetch_array($sel))
                     {	  

                      echo " <tr>
                        <td>".$row['name']."</td>
                         <td>".$row['description']."</td>
		                 <td>".$row['available']."</td>
		                  <td>".$row['price']."</td>
						  <td>".$row['weight']."</td>
						  <td>".$row['delivery']."</td>
						  <td><a href=\"send.php?id=".$row['sid']."\" style='color:#ff0000;'>Order</a></td>
                           </tr>";
                     }
                   ?>
            </table>
          </div>
          <p><a href="view1.php"></a></p>
          <p>&nbsp;</p>
          <p>&nbsp;</p></th>
        <th width="380" scope="col"><p><img src="../Images/Silver/Anklets/13.jpg" width="295" height="205" /></p>
          <div align="center">
            <table width="227" height="69" border="">
              <tr>
                <th width="60" height="63" scope="col">Item Name</th>
                <th width="60" scope="col"><div align="center">Description</div></th>
                <th width="71" scope="col">Available</th>
                <th width="74" scope="col">Rs</th>
                <th width="69" scope="col">Weight</th>
                <th width="69" scope="col">delivety</th>
                <th width="74" scope="col">Order</th>
              </tr>
              <?php
                     mysql_connect("localhost","root","");
                     mysql_select_db("jewellery");
                     $sel=mysql_query("select * from silverprice WHERE `silverprice`.`sid` = 44");

                      while($row=mysql_fetch_array($sel))
                     {	  

                      echo " <tr>
                        <td>".$row['name']."</td>
                         <td>".$row['description']."</td>
		                 <td>".$row['available']."</td>
		                  <td>".$row['price']."</td>
						  <td>".$row['weight']."</td>
						  <td>".$row['delivery']."</td>
						  <td><a href=\"send.php?id=".$row['sid']."\" style='color:#ff0000;'>Order</a></td>
                           </tr>";
                     }
                   ?>
            </table>
          </div>
          <p><a href="view1.php"></a></p>
          <p>&nbsp;</p>
          <p>&nbsp;</p></th>
      </tr>
    </table>
      <table width="871" height="404" border="0">
        <tr>
          <th width="478" height="400" scope="col"><p>\<img src="../Images/Silver/Anklets/18.jpg" width="295" height="205" /></p>
            <div align="center">
              <table width="227" height="69" border="">
                <tr>
                  <th width="60" height="63" scope="col">Item Name</th>
                  <th width="60" scope="col"><div align="center">Description</div></th>
                  <th width="71" scope="col">Available</th>
                  <th width="74" scope="col">Rs</th>
                  <th width="69" scope="col">Weight</th>
                  <th width="69" scope="col">delivety</th>
                  <th width="74" scope="col">Order</th>
                </tr>
                <?php
                     mysql_connect("localhost","root","");
                     mysql_select_db("jewellery");
                     $sel=mysql_query("select * from silverprice WHERE `silverprice`.`sid` = 44");

                      while($row=mysql_fetch_array($sel))
                     {	  

                      echo " <tr>
                        <td>".$row['name']."</td>
                         <td>".$row['description']."</td>
		                 <td>".$row['available']."</td>
		                  <td>".$row['price']."</td>
						  <td>".$row['weight']."</td>
						  <td>".$row['delivery']."</td>
						  <td><a href=\"send.php?id=".$row['sid']."\" style='color:#ff0000;'>Order</a></td>
                           </tr>";
                     }
                   ?>
              </table>
            </div>
            <p><a href="view1.php"></a></p>
            <p>&nbsp;</p>
          <p>&nbsp;</p></th>
          <th width="383" scope="col"><p>&nbsp;</p>
            <p><img src="../Images/Silver/Anklets/2.jpg" width="295" height="205" /></p>
            <div align="center">
              <table width="227" height="69" border="">
                <tr>
                  <th width="60" height="63" scope="col">Item Name</th>
                  <th width="60" scope="col"><div align="center">Description</div></th>
                  <th width="71" scope="col">Available</th>
                  <th width="74" scope="col">Rs</th>
                  <th width="69" scope="col">Weight</th>
                  <th width="69" scope="col">delivety</th>
                  <th width="74" scope="col">Order</th>
                </tr>
                <?php
                     mysql_connect("localhost","root","");
                     mysql_select_db("jewellery");
                     $sel=mysql_query("select * from silverprice WHERE `silverprice`.`sid` = 44");

                      while($row=mysql_fetch_array($sel))
                     {	  

                      echo " <tr>
                        <td>".$row['name']."</td>
                         <td>".$row['description']."</td>
		                 <td>".$row['available']."</td>
		                  <td>".$row['price']."</td>
						  <td>".$row['weight']."</td>
						  <td>".$row['delivery']."</td>
						  <td><a href=\"send.php?id=".$row['sid']."\" style='color:#ff0000;'>Order</a></td>
                           </tr>";
                     }
                   ?>
              </table>
            </div>
            <p><a href="view1.php"></a></p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
          <p>&nbsp;</p></th>
        </tr>
      </table>
      <p>&nbsp;</p>      </td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td><div align="center">
      <p><strong>Silver Type </strong></p>
      <p><a href="anklet.php">1.Anklets</a></p>
      <p><a href="armlet.php">2.Armlets</a></p>
      <p><a href="braselet.php">3.Bracelet</a></p>
      <p><a href="brooch.php">4.Brooches</a></p>
      <p><a href="hair.php">5.HairPin</a></p>
      <p><a href="earring.php">6.Earrings</a></p>
      <p><a href="chain.php">7.Chain</a></p>
      <p><a href="laddy.php">8.LadyRings</a></p>
      <p><a href="pandent.php">9.Pendant</a></p>
      <p align="center"><a href="pendantset.php"><br />
      </a></p>
      
    <a href="pendantset.php"></a></div></td>
    <td><table width="881" height="389" border="0">
      <tr>
        <th width="485" scope="col"><p><a href="view1.php"><img src="../Images/Silver/Anklets/1.jpg" width="295" height="205"/></a></p>
          <div align="center">
            <table width="227" height="69" border="">
              <tr>
                <th width="60" height="63" scope="col">Item Name</th>
                <th width="60" scope="col"><div align="center">Description</div></th>
                <th width="71" scope="col">Available</th>
                <th width="74" scope="col">Rs</th>
                <th width="69" scope="col">Weight</th>
                <th width="69" scope="col">delivety</th>
                <th width="74" scope="col">Order</th>
              </tr>
              <?php
                     mysql_connect("localhost","root","");
                     mysql_select_db("jewellery");
                     $sel=mysql_query("select * from silverprice WHERE `silverprice`.`sid` = 44");

                      while($row=mysql_fetch_array($sel))
                     {	  

                      echo " <tr>
                        <td>".$row['name']."</td>
                         <td>".$row['description']."</td>
		                 <td>".$row['available']."</td>
		                  <td>".$row['price']."</td>
						  <td>".$row['weight']."</td>
						  <td>".$row['delivery']."</td>
						  <td><a href=\"send.php?id=".$row['sid']."\" style='color:#ff0000;'>Order</a></td>
                           </tr>";
                     }
                   ?>
            </table>
          </div>
          <p><a href="view1.php"></a></p>
          <p>&nbsp;</p>
          <p>&nbsp;</p></th>
        <th width="386" scope="col"><p><img src="../Images/Silver/Anklets/14.jpg" width="295" height="205" /></p>
          <div align="center">
            <table width="227" height="69" border="">
              <tr>
                <th width="60" height="63" scope="col">Item Name</th>
                <th width="60" scope="col"><div align="center">Description</div></th>
                <th width="71" scope="col">Available</th>
                <th width="74" scope="col">Rs</th>
                <th width="69" scope="col">Weight</th>
                <th width="69" scope="col">delivety</th>
                <th width="74" scope="col">Order</th>
              </tr>
              <?php
                     mysql_connect("localhost","root","");
                     mysql_select_db("jewellery");
                     $sel=mysql_query("select * from silverprice WHERE `silverprice`.`sid` = 44");

                      while($row=mysql_fetch_array($sel))
                     {	  

                      echo " <tr>
                        <td>".$row['name']."</td>
                         <td>".$row['description']."</td>
		                 <td>".$row['available']."</td>
		                  <td>".$row['price']."</td>
						  <td>".$row['weight']."</td>
						  <td>".$row['delivery']."</td>
						  <td><a href=\"send.php?id=".$row['sid']."\" style='color:#ff0000;'>Order</a></td>
                           </tr>";
                     }
                   ?>
            </table>
          </div>
          <p><a href="view1.php"></a></p>
          <p>&nbsp;</p>
          <p>&nbsp;</p></th>
      </tr>
    </table>
  </tr>
</table>
</body>
</html>
