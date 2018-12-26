<?php include('function6.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>login form</title>
<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<table width="100%">
<tr>
<td>
<img src="logo1.jpg" width="200" height="200" alt="object not found">
</td>
<td align="center" colspan="4">
<marquee><h1>MISSION-R3</h1></marquee>
</td>
</tr>
</table>
</table>
</div>
 <center>
		 <ul id="nav">
        
        <li><a href="#">ADMIN LOG IN</a>
            <ul>
                <li><a href="login7.php"><b>ADMIN LOGIN</b></a>  
               </li>
               <li><a href="logig5u.php"><b>USER LOGIN</b></a>  
               </li>
            </ul>
        </li>
             
        
    </ul>
    <br>
    <br>
    </center>
<div style="margin-left:500px;border:2px dotted lime;width:300px;height:365px;float:left;">
<table align="center" border="0" width="40%" cellspacing="11" cellpadding="8">
<tr><td align="center">
<b>...</b></td></tr>

	<div class="header">
		<h2>Login</h2>
	</div>
	<form method="post" action="login7.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<p>Username</p>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<p>Password</p>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register7.php">Sign up</a>
		</p>
	</form>
</body>
</html>