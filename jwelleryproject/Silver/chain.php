
<html>
<head>

<title>Untitled Document</title>
<style>a:link {text-decoration:none;}</style>
</head>

<body>
<table width="1310" border="0" >
  <tr bgcolor="#f5daf3">
    <th width="322" height="148" scope="col"><img src="../Images/img/banner2-960x300.jpg" width="318" height="284" /></th>
    <th width="978" scope="col"><p align="center">&nbsp;</p>
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
      <p align="center">&nbsp;</p>
      <p align="center">&nbsp;</p>
      <p align="center"><a href="../home.php"><font size="4" color="#990099">Home</font></a></p>
      <p align="center"><font size="4"><a href="../Admin Login/index.php">Admin login </a> &nbsp;&nbsp;&nbsp; </font></p>
      <p align="center"><font size="4"><a href="../about.php">About Us </a> &nbsp;&nbsp;&nbsp; </font></p>
    <p align="center"><font size="4"><a href="../Gold/index.php">Gold Item </a> &nbsp;&nbsp;&nbsp; </font></p>
    <p align="center"><font size="4"><a href="index.php">Silver Item </a>&nbsp;&nbsp;&nbsp; </font></p>
    <p align="center"><font size="4"><a href="../Diamond/index.php">Diamond Item </a>&nbsp;&nbsp;&nbsp; </font></p>
    <p align="center"><font size="4"><a href="../feedback.php">Feedback </a> </a></font></p></td>
    <td><table width="977" height="132" border="0">
      <tr>
        <th width="472" height="126" scope="col"><p><img src="../Images/Silver/Chain/11.jpg"  width="295" height="205" /></p>
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
                     $sel=mysql_query("select * from silverprice WHERE `silverprice`.`sid` = 5");

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
          <p>&nbsp;</p>
          <p><a href="view1.php"></a>          </p>
          <p>&nbsp;</p></th>
        <th width="495" scope="col"><p>&nbsp;</p>
          <p><img src="../Images/Silver/Chain/14.jpg"  width="295" height="205" /></p>
          <p>&nbsp;</p>
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
                     $sel=mysql_query("select * from silverprice WHERE `silverprice`.`sid` = 6");

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
          <p>&nbsp;</p>
          <p><a href="view1.php"></a></p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p></th>
      </tr>
    </table>
      <table width="978" height="277" border="0">
        <tr>
          <th width="489" scope="col"><p>&nbsp;</p>
            <p>&nbsp;</p>
            <p><img src="../Images/Silver/Chain/9.jpg" width="295" height="205" /></p>
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
                     $sel=mysql_query("select * from silverprice WHERE `silverprice`.`sid` = 7");

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
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p><a href="view1.php"></a></p>
          <p>&nbsp;</p></th>
          <th width="479" scope="col"><p><img src="../Images/Silver/Chain/1.jpg"  width="295" height="205" /></p>
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
                     $sel=mysql_query("select * from silverprice WHERE `silverprice`.`sid` = 8");

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
            <p>&nbsp;</p>
            <p><a href="view1.php"></a></p></th>
          
         
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
      <p><a href="pandent.php">9.PendantSet</a></p>
      <p align="center"><a href="pendantset.php"><br />
      </a></p>
      
    <a href="pendantset.php"></a></div></td>
    <td><table width="978" height="232" border="0">
      <tr>
        <th width="495" scope="col"><p><img src="../Images/Silver/Chain/3.jpg"  width="295" height="205" /></p>
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
                     $sel=mysql_query("select * from silverprice WHERE `silverprice`.`sid` = 9");

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
          <p>&nbsp;</p>
          <p><a href="view1.php"></a></p></th>
        <th width="473" scope="col"><p><img src="../Images/Silver/Chain/6.jpg"  width="295" height="205" /></p>
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
                     $sel=mysql_query("select * from silverprice WHERE `silverprice`.`sid` = 10");

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
          <p>&nbsp;</p>
          <p><a href="view1.php"></a></p></th>
      </tr>
    </table>
    
  </tr>
</table>
</body>
</html>
