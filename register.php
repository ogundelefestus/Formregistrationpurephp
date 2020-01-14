<?php 


include('server.php');

?>


<!DOCTYPE html>
<html>
<head>
	<title>User registration system using php and mysql</title>
</head>
<body>
	<div class="header">

		<h2>Register</h2>
<form method="POST" action="register.php">
	
<?php include('errors.php');?>
	<input type="text" name="username" value="<?php echo $username;?>"><br>

	<input type="text" name="email" value="<?php echo $email;?>"><br>
	<input type="password" name="password_1" ><br>
	<input type="password" name="password_2"><br>
	<input type="submit" name="register" value="submit">

	<p>Already a member? <a href="login.php">Sign in</a></p>
</form>
</div>

</body>
</html>