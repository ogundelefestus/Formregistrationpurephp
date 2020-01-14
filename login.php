<?php include('server.php');?>



<!DOCTYPE html>
<html>
<head>
	<title>User registration system using php and mysql</title>
</head>
<body>
	<div class="header">

		<h2>Login</h2>
<form method="post" action="login.php">
	<?php include('errors.php');?>
	

	<input type="text" name="username"><br>

	
	<input type="password" name="password"><br>

	<input type="submit" name="login" value="login">

	<p>Not yet a member? <a href="register.php">Sign up</a></p>
</form>

	</div>

</body>
</html>