<?php include('server.php');

if(empty($_SESSION['username'])){

header('location:login.php');

}


?>

<!DOCTYPE html>
<html>
<head>
	<title>User registration system using php and mysql</title>
</head>
<body>
	<div class="header">

		<h2>Home page</h2>
	</div>
	<div class="content">

		<?php if(isset($_SESSION['success'])):?>
			<div class="error succes">
				<h3>
					<?php
					echo $_SESSION['success'];
                    unset ($_SESSION['success']);


?>


				</h3>

             </div>
         <?php endif ?>
		
		<?php if(isset($_SESSION['username'])):?>
		<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
		<a href="index.php?logout='1'" style="color:red;">Logout</a>
	<?php endif ?>

	</div>
</div>
</body>
</html>
