<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<h3>Register</h3>
	<?php if(isset($errors) && !empty($errors)){
			echo $errors;
	} ?>
	<br>
	<form action="/users/create" method="post">
		<!-- <input type="hidden" name="action" value="register"> -->
		<label>First Name:</label><br>
		<input type='text' name='first_name'><br>
		<label>Last Name:</label><br>
		<input type='text' name='last_name'><br>
		<label>Email Address:</label><br>
		<input type='text' name='email'><br>
		<label>Password:</label><br>
		<input type='password' name='password'><br>
		<label>Confirm Password:</label><br>
		<input type='password' name='confirm_password'><br>
		<input type='submit' value="Register">
	</form>
	<a href="/users/sign_in_page">Already have an account? Login</a>
</body>
</html>








