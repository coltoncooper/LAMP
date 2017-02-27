<!DOCTYPE html>
<html>
<head>
	<title>Sign in page</title>
</head>
<body>
	<h3>Login</h3>
	<form action="/signin/login" method="post">
		<label>Email</label><br>
		<input type='text' name="email"><br>
		<label>Password</label><br>
		<input type="password" name="password"><br>
		<input type="submit" value="Login"><br><br>
	</form>
	<?php 
	  if($this->session->flashdata("login_error")) 
	  {
	    echo $this->session->flashdata("login_error");
	  }
	?>
	<a href="/register">Don't have an account? Register</a>
</body>
</html>