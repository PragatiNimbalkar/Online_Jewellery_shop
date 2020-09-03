
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
      <table width="400" align="center" border="0">
        <tr>
          <td bgcolor="c6d3ce"><table width="400" border="0">
            <tr bgcolor="dee7e7">
              <td width="165"><strong>ID</strong></td>
              <td><input type="text" name="Userid" size="8" value="" disabled="disabled" /></td>
            </tr>
            <tr bgcolor="dee7e7">
              <td width="165"><strong>Name</strong></td>
              <td><b><input type="text" size="25" name="Surname" disabled="disabled" /></b><strong></strong></td>
            </tr>
            <tr bgcolor="e7efef">
              <td><strong>Surname</strong></td>
              <td><b>
                <input type="text" size="25" name="Surname" disabled="disabled" />
              </b></td>
            </tr>
            <tr bgcolor="e7efef">
              <td><strong>Email</strong></td>
              <td><b>
                <input type="text" size="30" name="Email" value="" disabled="disabled" />
              </b></td>
            </tr>
            <tr bgcolor="dee7e7">
              <td><strong>Billing Address</strong></td>
              <td><b>
                <textarea rows="3" name="Address" cols="20" disabled="disabled"></textarea>
              </b></td>
            </tr>
            <tr bgcolor="e7efef">
              <td><strong>Telephone</strong></td>
              <td><b>
                <input type="text" size="10" maxlength="8" name="Tel" value="" disabled="disabled" />
              </b></td>
            </tr>
            <tr bgcolor="e7efef">
              <td><strong>Credit Card</strong></td>
              <td><b>
                <input type="text" size="15" maxlength="14" name="Card" onkeypress="if (event.keyCode &lt; 45 || event.keyCode &gt; 57) event.returnValue = false;" />
              </b></td>
            </tr>
          </table></td>
        </tr>
      </table>
      <br />
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
