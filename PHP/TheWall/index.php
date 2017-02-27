<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login and Registration</title>
	<style type="text/css">
		.error{
			color:red;
		}
		.success{
			color:green;
		}
	</style>
</head>
<body>
	<?php 
		if(isset($_SESSION['errors'])){
			foreach($_SESSION['errors'] as $error){
				echo "<p class='error'>{$error}</p>";
			}
			unset($_SESSION['errors']);
		}
	?>
	<h2>Register</h2>
	<form action="process.php" method="post">
		<input type="hidden" name="action" value="register">
		First name: <input type="text" name='first_name'><br>
		Last name: <input type="text" name='last_name'><br>
		Email address: <input type="text" name='email'><br>
		Password: <input type="password" name='password'><br>
		Confirm password: <input type="password" name='confirm_password'><br>
		<input type="submit" value="register">
	</form>
	<h2>Login</h2>
	<form action="process.php" method="post">
		<input type="hidden" name="action" value="login">
		Email address: <input type="text" name="email"><br>
		Password: <input type="password" name="password"><br>
		<input type="submit" value="login">
	</form>
</body>
</html>