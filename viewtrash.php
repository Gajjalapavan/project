<html>
<head>
<link rel="stylesheet" type="text/css" href="login.css">
</head>
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location:logig5u.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: logig5u.php");
  }
?>
<?php
$n=$_SESSION['username'];
	$con=new mysqli("localhost","root","","clg");
	$sql="select * from it where un='$n'";
	$result=$con->query($sql);
	
	if($result->num_rows>0)
	{
		echo "<div style='display:;justify-content:center;'>";
	echo "<table border=1 style='border:1px solid lime;width:70%; border-collapse: collapse;text-align:center;' >";
	echo "<tr style='background-color:blue;font-size:16px;'><th>User name</th><th>Barcode</th><th>Phone Number</th><th>Amount</th><th>Status</th></tr>";
	                while($row= $result->fetch_assoc()) {
                    echo "<tr><td>".$row['un']."</td><td>".$row['br']."</td><td>".$row['ph']."</td><td>".$row['amt']."</td><td>".$row['status']."</td>";
					echo "</tr>";
					}
					 echo "</table></div>";	 			 
	}			 
	else
	{
		echo "No Records Found";
	
	}
?>
<body>
	<h1><a href="home.html"><img  src="back.jpg" height="60" width="150" ></img></a></h1>
</body>
</html>