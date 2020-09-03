<?php
$db=mysql_connect("localhost","root","");
$er=mysql_select_db("jewellery");
//$query="insert into rname(Names,Address1,Address2,E-mail id) values('$name','$add1','$add1','$mail')";
//$result=mysql_query($query);

$result1=mysql_query("select * from feedback");
?>
<html>
<title>First program of the database retrieve query</title>
<body>
<table width="500" border="2" align="center">
<caption>
<h1>Jewellery  Feedback</h1>
</caption>
<tr>
<tr>
<th>id</th>
<th>name</th>
<th>email</th>
<th>message</th>
</tr>
<html>
<body>


<p>
  <?php
while($array=mysql_fetch_row($result1))
{
print"<tr><td>";
echo $array[0];
print"</td><td>";
echo $array[1];
print"</td><td>";
echo $array[2];
print"</td><td>";
echo $array[3];
print"</td></tr>";

}
?>
</p>
<p><img src="../Images/img/ba2.jpg" width="1374" height="266" ></p>
<p><a href="dashboard.php">
  <input type="button" name="button" value="Back">
  </a>
</body>
</html>
