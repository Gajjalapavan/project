<html>
<head>

<style>



body
{
	background-image:url(../article.png);

	height:100vh;
	background-size:cover;
	background-position:center;
}
	</style>

</head>
<body>
<?php
	$con=new mysqli("localhost","root","","clg");
	$sql="select * from it where status='pending' ";
	$result=$con->query($sql);
	echo "<div style='display:flex;justify-content:center;'>";
	echo "<table border=1 style='border:1px solid lime;width:50%; border-collapse: collapse;text-align:center;' >";
	if($result->num_rows>0)
	{
	                while($row= $result->fetch_assoc()) {
                    echo "<tr><td  style='padding:10px;'>".$row['un']."</td><td>".$row['br']."</td><td>".$row['ph']."</td><td><input type='text' value=".$row['amt']."></td>";
					echo "<td style='background: white;'>";
					echo "<a class='appr' href='showdetails.php?id=".$row['un']."&amt='".">";
					echo "approve";
					echo "</a>";
					echo "</td></tr>";
    }
	}
	if(isset($_GET['id']))
	{
		$id1=$_GET['id'];
		$con->query("update it SET status='approved',amt=100 where un='$id1' ");
		echo "<script>alert('approved'.$id1);</script>";
		header('Location: showdetails.php');
	}
	echo "</table></div>";
?>

<img src="logo1.jpg" width="200" height="200" alt="object not found">
<p>click on approve then back to home</p>
<h1><a href="home6.php"><img  src="back.jpg" height="60" width="150" ></img></a></h1>

</body>
</html>
