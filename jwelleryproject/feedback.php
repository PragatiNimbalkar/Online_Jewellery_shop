


<html>
<body bgcolor="#CCCCCC">

<?php
include("header.php");
?>

<table width="1124" height="198" border="0">
    <tr>
      <th width="1030" scope="col"><img src="Images/img/20161207114536.jpg" width="1238" height="275" /></th>
    </tr>
  </table>
<table width="980" height="331" border="0">
    <tr>
      <th width="429" scope="col"><p><a href="home.php">Home</a></p>
        <p align="center"><a href="Admin Login/login.php">Admin login </a> &nbsp;&nbsp;&nbsp; </p>
        <p align="center"><a href="about.php">About Us </a> &nbsp;&nbsp;&nbsp; </p>
        <p align="center"><a href="Gold/index.php">Gold Item </a> &nbsp;&nbsp;&nbsp; </p>
        <p align="center"><a href="Silver/index.php">Silver Item </a>&nbsp;&nbsp;&nbsp; </p>
        <p align="center"><a href="Diamond/index.php">Diamond Item </a>&nbsp;&nbsp;&nbsp; </p>
      <p align="center"><a href="feedback.php">Feedback </a> </p></th>





<th width="652" scope="col">&nbsp;
<form name="form1" method="post" action="#">
<font color="blue" size=5 >
&nbsp;&nbsp;&nbsp;User name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="name" placeholder="enter name" required><br><br>
&nbsp;&nbsp;&nbsp;Email_id:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="email" placeholder="enter valid email" required><br><br>
&nbsp;&nbsp;
Comment:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<textarea rows="2" cols="25" id="message" name="message"  placeholder="enter comment" required></textarea><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="submit" name="Submit" value="submit">&nbsp;&nbsp;&nbsp;<input type="reset" value="reset">
</form>
<?php
		
		if(isset($_POST["Submit"]))
		{
            $con=mysql_connect('localhost','root','');
            $db_selected=mysql_select_db("jewellery",$con);
            $mysql="INSERT INTO feedback(name,email,message) VAlUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['message']."')";
            mysql_query($mysql,$con);
            mysql_close($con);
		}
?>



</table>
</body>
</html>
