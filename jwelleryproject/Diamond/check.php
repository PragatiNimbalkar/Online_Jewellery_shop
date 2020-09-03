
<html>
<head>

<title>Untitled Document</title>
<style>a:link {text-decoration:none;}</style>
</head>

<body>
<div class="box-heading-1"></div>
<div class="box-content-1">
  <div class="box-product-1" >
    <center>
      <b><u>ITEMS IN YOUR CART</u></b>
    </center>
    <br />
    <table align='center' border='1' cellspacing='1' cellpadding='0' width='50%'>
      <tr>
        <th align='center' bgcolor='e6e6e6'>JEWEL ID</th>
        <th align='center' bgcolor='e6e6e6''>PRODUCT</th>
        <th align='center' bgcolor='e6e6e6''>QUANTITY</th>
        <th align='center' bgcolor='e6e6e6''>PRICE</th>
        <th align='center' bgcolor='e6e6e6''>AMOUNT</th>
      </tr>
      <tr align='center'>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr align='center'>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
    </center>
    <br />
    <script type="text/javascript">
					<!--  Begin

					function resetform()
					{
					document.forms[0].elements[6]=="";
					}

					function submitForms()
					{
					if (isCard())
					if (confirm("\n You are about to submit this form. \n\nPress Ok to submit. Cancel to abort."))
					{
					alert(document.forms[0].elements[2].value + " " + document.forms[0].elements[1].value +"\n\n\nYour Checkout form has been sent successfully. \n\n\nThank you!");
					return true;
					}
					else
					{
					alert("You have chosen to abort the checkout.");
					return false;
					}
					else 
					return false;
					}


					function isCard()
					{
					T = document.forms[0].elements[6].value;
					if(T == "")
					{
					alert("Credit Card cannot be blank")
					document.forms[0].elements[6].focus();
					return false;                
					}

					else
					{
					if(T == 0)
					{
					alert("Credit Card cannot be less or equal to zero");
					document.forms[0].elements[6].focus();
					return false;  
					}

					else
					{
					if(T.length<14)
					{
					alert("Credit Card Number must be 14 digits");
					document.forms[0].elements[6].focus();
					return false;  
					}

					else
					{
					if(T.indexOf(".")==1)
					{
					alert("Credit Card cannot contain dot sign");
					document.forms[0].elements[6].focus();
					return false;  
					}

					return true;
					}
					}
					}
					}
					// End -->
					</script>
    <table border="1" align="center" width="300px">
      <tr align="center">
        <td width="150px"><b>Total Quantity</b></td>
        <td width="150px">&nbsp;</td>
      </tr>
      <tr align="center">
        <td width="150px"><b>Total Items</b></td>
        <td width="150px">&nbsp;</td>
      </tr>
      <tr align="center">
        <td><b>Sub Total</b></td>
        <td>&nbsp;</td>
      </tr>
      <tr align="center">
        <td><b>VAT (15%)</b></td>
        <td>&nbsp;</td>
      </tr>
      <tr align="center">
        <td><b>Delivery Cost</b></td>
        <td>&nbsp;</td>
      </tr>
      <tr align="center">
        <td><b>Total Amount</b></td>
        <td>&nbsp;</td>
      </tr>
    </table>
	<p align="center"><b>NOTE:- All figures rounded</b></p>

										<p align="center"><input type="button" value="Checkout" onClick="javascript:location.href='checkout.php';"></p>
  </div>
</div>
<p align="center">
  </div>
			</div>
	      </div>
</p>

</body>
</html>
