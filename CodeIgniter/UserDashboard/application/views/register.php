<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<h3>Register</h3>
	<form action="/register/create" method="post">
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
	<?php 
	  if($this->session->flashdata("login_error")) 
	  {
	    echo $this->session->flashdata("login_error");
	  }
	?>
	<a href="/signin">Already have an account? Login</a>
</body>
</html>








