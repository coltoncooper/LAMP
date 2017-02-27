<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<h3>Login</h3>
	<?php 
	  if($this->session->flashdata("login_error")) 
	  {
	    echo $this->session->flashdata("login_error");
	  }
	?>
	
	<form action="/users/login" method="post">
		<!-- <input type="hidden" name="action" value="login"> -->
		<label>Email</label><br>
		<input type='text' name="email"><br>
		<label>Password</label><br>
		<input type="password" name="password"><br>
		<input type="submit" value="Login"><br><br>
	</form>
	<a href="/users/register_page">Don't have an account? Register</a>
</body>
</html>