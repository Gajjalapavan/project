<?php include('function6.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>Registration form</title>
<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<div class="header">
	<h2>Register</h2>
</div>
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
  <div class="header">
  	<h2>Register</h2>
  </div>
<form method="post" action="register7.php">
<?php echo display_error(); ?>
<div class="input-group">
		<p>ID</p>
		<input type="number" name="id" value="<?php echo $id;?>">
	</div>
	<div class="input-group">
		<p>Username</p>
		<input type="text" name="username" value="<?php echo $username;?>">
	</div>
	<div class="input-group">
		<p>Email</p>
		<input type="email" name="email" value="<?php echo $username;?>">
	</div>
	<div class="input-group">
		<p>Password</p>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<p>Confirm password</p>
		<input type="password" name="password_2">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
	<p>
		Already a member? <a href="login7.php">Sign in</a>
	</p>
</form>
</body>
</html>