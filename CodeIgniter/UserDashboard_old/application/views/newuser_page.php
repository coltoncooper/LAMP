<!DOCTYPE html>
<html>
<head>
	<title>New User</title>
</head>
<body>
	<h3>Add a new user</h3>
	<?php if(isset($errors) && !empty($errors)){
			echo $errors;
	} ?>
	<br>
	<form action="/newuser/create" method="post">
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
		<input type='submit' value="Add user">
	</form>
</body>
</html>








