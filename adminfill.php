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
<form name="f1" action="showdetails.php" method="post" >
<?php
$con=new mysqli("localhost","root","","clg");
  $sql="select count(un) from it where status='pending' ";
  if($result=$con->query($sql))
  {
    $row=$result->fetch_assoc();
        echo "<div style='position:absolute;top:15px;width:100;height:50;background-color:yellow;color:red;text-align:center;margin-left:600px;font-size:20px;'> Requests<br>"."<a href='showdetails.php'>".$row['count(un)']."</a></div>";
    }
?>
<h4 align="left" color="white">click on REQUEST to update amount</h4>
<h1><a href="home6.php"><img  src="back.jpg" height="60" width="150" ></img></a></h1>

</body>
</html>