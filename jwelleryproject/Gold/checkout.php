
<html>
<head>

<title>Untitled Document</title>
<style>a:link {text-decoration:none;}</style>
</head>

<body>
<p align="center"><b>CHECKOUT FORM</b></p>
<table border="0" cellpadding="1" cellspacing="0" width="80%" align="center">
  <tr>
    <td colspan="5" height="96"><form action="confirmcheckout.php" method="post" name="formCheckout" id="formCheckout" onsubmit="return submitForms()">
      <div align="center">
  <table width="33%" border="0">
   
    <tr>
      <td><div align="left">
        <table width="301" border="0" align="left">
          <tr>
            <td><div align="left" class="style7">Login Id </div></td>
              <td><input type="text" name="lid" /></td>
            </tr>
          <tr>
            <td class="style7">Password</td>
              <td><input type="password" name="pass" /></td>
            </tr>
          <tr>
            <td class="style7">Confirm Password </td>
              <td><input name="cpass" type="password" id="cpass" /></td>
            </tr>
          <tr>
            <td class="style7">Name</td>
              <td><input name="name" type="text" id="name" /></td>
            </tr>
          <tr>
            <td valign="top" class="style7">Address</td>
              <td><textarea name="address" id="address"></textarea></td>
            </tr>
          <tr>
            <td valign="top" class="style7">City</td>
              <td><input name="city" type="text" id="city" /></td>
            </tr>
          <tr>
            <td valign="top" class="style7">Phone</td>
              <td><input name="phone" type="text" id="phone" /></td>
            </tr>
          <tr>
            <td valign="top" class="style7">E-mail</td>
              <td><input name="email" type="text" id="email" /></td>
            </tr>
          <tr>
            <td>Credit Card </td>
		        <td><input name="card" type="text" id="card" /></td>
              <td>&nbsp;</td>
            </tr>
          </table>
        </div></td>
      </tr>
  </table>
  <br />
      </div>
      <table width="400" align="center" border="0">
        <tr>
          <td align="center" width="200"><input name="submit" type="submit" value="Submit" /></td>
          <td align="center" width="200"><input type="reset" name="reset" value="Reset Form" onclick="return confirm('Are you sure you want to reset the current information?');" /></td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
</body>
</html>
