<?php
session_start();
?>

<html>
<head>
<title>Wel come to jewellery shop</title>

<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<div align="right"><font size=6> </font>
  <?php

include("database.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysql_query("select * from user where login='$loginid' and pass='$pass'");
	if(mysql_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION['login']=$loginid;
	}
}
if (isset($_SESSION['login']))
{
echo "<h1 class='style8' align=center></h1>";
		echo '<br><br><a href="home.php" class="style4"><font size="6"><h1 align="center">Welcome to  </font></a>
		
		';
   
		exit;
		

}

?>
</div>
<div onMouseOver="document.getElementById('img').stop();" onMouseOut="document.getElementById('img').start();"><img src="Images/img/home_banner_3 - Copy.jpg" width="1338" height="264" align="left"></div>

<p>
<table width="51%" border="0" align="left">
</p>
<div align="right">
<table width="43%" border="0" align="right">
      
      <tr>
        
        
        <td width="55%"><div align="center"><font size="6">User Login </font></div></td><td width="45%">
  </td>  
    </tr>
      <tr>
        
        <td height="243" valign="top"><form name="form1" method="post" action="">
          
          <div align="center">
            <table width="543" height="241" border="0">
              <tr>
                <td width="242" height="75"><div align="right"><span class="style2">Login ID </span></div></td>
                <td width="291"><input name="loginid" type="text" id="loginid2"></td>
              </tr>
              <tr>
                <td height="57"><div align="right"><span class="style2">Password</span> </div></td>
                <td><input name="pass" type="password" id="pass2"></td>
              </tr>
              <tr>
                <td height="27" colspan="2"><div align="center"><span class="errors">
                  <?php
		  if(isset($found))
		  {
		  	echo "Invalid Username or Password";
		  }
		  ?>
                  </span></div></td>
              </tr>
              <tr>
                <td height="56" colspan=2 align=center class="errors"><input name="submit" type="submit" id="submit" value="Login">          </td>
              </tr>
            </table>
          </div>
      </form>	  </td>
    </tr>
  </table>
</div>
<tr>

</body>
</html>

	 