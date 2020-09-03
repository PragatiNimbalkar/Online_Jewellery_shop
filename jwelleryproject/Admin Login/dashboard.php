<?php 

 session_start();
if(!isset($_SESSION['stat']))
header("location:index.php?msg=Kindly login first");
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body bgcolor="#99FFFF">
<table width="1344" height="90" border="1">
  <tr font size=15>
    <td height="84" colspan="2" bgcolor="#99CCCC"><div align="center">
	
	<a href="reg.php">
    <input name="button22" type="button" value="Registration" size="50" />
    </a><a href="feedback.php">
    <input name="button222" type="button" value="Feedback" size="50" />
    </a><a href="Gold/index.php">
      <input name="button2" type="button" value="Gold" size="50" />
    </a><a href="Silver/index.php">
    <input name="button22" type="button" value="Silver" size="50" />
    </a> <a href="Diamond/index.php">
    <input name="button22" type="button" value="Diamond" size="50" />
    </a> <a href="logout.php">
    <input name="button22" type="button" value="Logout" size="50" />
    </a></div></td>
 </font> </tr>
</table>
<marquee scrollamount="8" loop="infinite"  id='scroll' >
<div onMouseOver="document.getElementById('scroll').stop();" onMouseOut="document.getElementById('scroll').start();"><img src="../Images/img/background_previously-owned - Copy (4).jpg" width="1358" height="502" /><img src="../Images/img/banner1.jpg" width="1358" height="502" /><img src="../Images/img/ba2.jpg" width="1358" height="502" /></div>
</marquee>
&nbsp;</p>
</body>
</html>
