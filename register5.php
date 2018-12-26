<?php include('server5.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration form</title>
<link rel="stylesheet" type="text/css" href="login.css">
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
  <tr><td align="center">
<b> **USER REGISTRATION FORM **</b></td></tr>
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register5.php">
  	<?php include('errors5.php'); ?>
	<div style="margin-left:500px;border:2px dotted lime;width:230px;height:880px;float:left;">
<table align="center" border="0" width="40%" cellspacing="4" cellpadding="4">

  	<div class="input-group">
  	  <p>Username</p>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <p>Email</p>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
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
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="logig5u.php">Sign in</a>
  	</p>
  </form>
</body>
</html>