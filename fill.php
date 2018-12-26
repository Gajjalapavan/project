<html>
<head>
<link rel="stylesheet" type="text/css" href="ureglogin.css">
</head>
<body>
<table width="100%">
<tr>
<td>
<img src="logo.jpg" width="200" height="200" alt="object not found">
</td>
<td align="center" colspan="4">
<marquee><h1>MISSION-R3</h1></marquee>
</td>
</tr>
</table>
</div>
<form name="f1" action="" method="post" >

<div style="margin-left:500px;border:2px dotted lime;width:410px;height:880px;float:left;">
<table align="center" border="0" width="40%" cellspacing="4" cellpadding="4">
<tr><td align="center">
<b> ** 	FILL FORM **</b></td></tr>
<tr>
<td>
<h3>name</h3>
</td>
<td>
<input type="text" name="un" size="30">
</td>
</tr>
<tr>
<td>
<h3>barcode</h3>
</td>
<td>
<input type="number" name="br" size="30">
</td>
</tr>
<tr>
<td>
<h3>phone</h3>
<td>
<input type="number" name="ph" size="30">
</td>
</tr>
<tr>
<td>
<h3>Expected amount</h3>
</td>
<td>
<input type="amount" name="amt" size="30"> 
</td>
</tr>
<tr>
<td align="center">
<input type="submit" name="submit">
</td>
</tr>
</table>
</form>
<?php
if(isset($_POST['submit']))
{
	$un=$_POST['un'];
	$br=$_POST['br'];
	$ph=$_POST['ph'];
	$amt=$_POST['amt'];
		

	$con=new mysqli("localhost","root",'',"clg");
	$sql="insert into it(un,br,ph,amt,status) values('$un','$br','$ph','$amt','pending')";
	$result=$con->query($sql);
 if($result===true)
	{
		echo "<b>Inserted</b>";
	}
	else
	{
		echo "ERROR: ",$sql,"<br>",$con->error;
	}
	$con->close();
}
?>
<h1><a href="home.html"><img  src="back.jpg" height="60" width="150" ></img></a></h1>

</body>
</html>