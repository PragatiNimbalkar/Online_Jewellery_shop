<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>New user signup </title>
<script language="javascript">
function check()
{

 if(document.form1.lid.value=="")
  {
    alert("Plese Enter Login Id");
	document.form1.lid.focus();
	return false;
  }
 
 if(document.form1.pass.value=="")
  {
    alert("Plese Enter Your Password");
	document.form1.pass.focus();
	return false;
  } 
  if(document.form1.cpass.value=="")
  {
    alert("Plese Enter Confirm Password");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.pass.value!=document.form1.cpass.value)
  {
    alert("Confirm Password does not matched");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.name.value=="")
  {
    alert("Plese Enter Your Name");
	document.form1.name.focus();
	return false;
  }
  if(document.form1.address.value=="")
  {
    alert("Plese Enter Address");
	document.form1.address.focus();
	return false;
  }
  if(document.form1.city.value=="")
  {
    alert("Plese Enter City Name");
	document.form1.city.focus();
	return false;
  }
  if(document.form1.phone.value=="")
  {
    alert("Plese Enter Contact No");
	document.form1.phone.focus();
	return false;
  }
  if(document.form1.email.value=="")
  {
    alert("Plese Enter your Email Address");
	document.form1.email.focus();
	return false;
  }
  e=document.form1.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.form1.email.focus();
			return false;
		}
  return true;
  }
  
</script>

</head>

<body bgcolor="#CCFFCC" >
<table border="0" align="right">
  <tr><td><font size=4 color="blue">&nbsp;
  </font>

<div align=\"right\">
 <font color="blue" size="4">
  <a href="login.php">
  
<img src="Images\img\login-system-icon-13.png" width="249" height="146"></a></tr>
</table>


 <p><a href="Admin Login/index.php"><img src="Images/img/200px-Tanishq_Logo.svg.png" width="200" height="131" align="top"></a></p>
 

<div align="left">
<div align="center">
  <table width="56%" height="412" border="0">
    <tr>
      <td width="44" rowspan="2" valign="top">&nbsp;</td>
      <td width="301" height="57"><h1 align="center">&nbsp;</h1>
          <h1 align="center">Registration</h1></td>
    </tr>
    <tr>
      <td><form name="form1" method="post" action="signupuser.php" onSubmit="return check();">
        
        <div align="center">
          <table width="301" border="0" align="left">
            <tr>
              <td><div align="left" class="style7">Login Id </div></td>
                <td><input type="text" name="lid"></td>
              </tr>
            <tr>
              <td class="style7">Password</td>
                <td><input type="password" name="pass"></td>
              </tr>
            <tr>
              <td class="style7">Confirm Password </td>
                <td><input name="cpass" type="password" id="cpass"></td>
              </tr>
            <tr>
              <td class="style7">Name</td>
                <td><input name="name" type="text" id="name"></td>
              </tr>
            <tr>
              <td valign="top" class="style7">Address</td>
                <td><textarea name="address" id="address"></textarea></td>
              </tr>
            <tr>
              <td valign="top" class="style7">City</td>
                <td><input name="city" type="text" id="city"></td>
              </tr>
            <tr>
              <td valign="top" class="style7">Phone</td>
                <td><input name="phone" type="text" id="phone"></td>
              </tr>
            <tr>
              <td valign="top" class="style7">E-mail</td>
                <td><input name="email" type="text" id="email"></td>
              </tr>
            <tr>
              <td>&nbsp;</td>
                <td><input type="submit" name="Submit" value="Submit">              </td>
              </tr>
            </table>
          </div>
      </form></td>
      <td align="right">&nbsp;</td>
    </tr>
  </table>
</div>
<p>&nbsp; </p>
</body>
</html>
