<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<h3>Login</h3>
	<form action="/main/login" method="post">
		<label>Email</label><br>
		<input type='text' name="email"><br>
		<label>Password</label><br>
		<input type="password" name="password"><br>
		<input type="submit" value="Login"><br>
	</form>

	<?php 
	  if($this->session->flashdata("login_error")) 
	  {
	    echo $this->session->flashdata("login_error");
	  }
	?>

	<h3>Or Register</h3>
	<form action="/main/create" method="post">
		<!-- <input type="hidden" name="action" value="register"> -->
		<label>Name:</label><br>
		<input type='text' name='name'><br>
		<label>Alias:</label><br>
		<input type='text' name='alias'><br>
		<label>Email Address:</label><br>
		<input type='text' name='email'><br>
		<label>Password:</label><br>
		<input type='password' name='password'><br>
		<label>Confirm Password:</label><br>
		<input type='password' name='confirm_password'><br>
		<label>Date of Birth</label>
		<input type=date max=2017-01-30 name='dob'><br>
		<input type='submit' value="Register"><br>
	</form>
	<?php if(isset($errors) && !empty($errors)){
			echo $errors;
	} ?>
</body>
</html>