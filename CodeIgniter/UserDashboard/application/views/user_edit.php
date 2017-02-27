<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile</title>
</head>
<body>
	<a href='/dashboard/admin'>Dashboard</a>
	<a href='/users/edit'>Profile</a>
	<a href="/signin/logout">Log off</a>
	<h3>Edit Profile</h3>
	<h2>Edit Information</h2>
	<form action="/users/edit_profile" method="post">
		<label>Email</label><br>
		<input type='text' name="email" value=<?php echo $this->session->userdata('email') ?>><br>
		<label>First Name</label>
		<input type="text" name="first_name" value=<?php echo $this->session->userdata('first_name') ?>><br>
		<label>Last Name</label>
		<input type="text" name="last_name" value=<?php echo $this->session->userdata('last_name') ?>><br>
		<input type="submit" value="Save"><br><br>
	</form>

	<h2>Change Password</h2>
	<form action="/users/update_password" method="post">
		<label>Password</label><br>
		<input type='password' name="password"><br>
		<label>Password Confirmation</label>
		<input type="password" name="confirm_password"><br>
		<input type="submit" value="Update Password"><br><br>
	</form>

	<h2>Edit Description</h2>
	<form action="/users/edit_description" method="post">
		<label>Edit Description</label><br>
		<textarea type='text' name="description"><?php echo $this->session->userdata('description') ?></textarea><br>
		<input type="submit" value="Save"><br><br>
	</form>

	<?php 
	  if($this->session->flashdata("login_error")) 
	  {
	    echo $this->session->flashdata("login_error");
	  }
	?>
	<?php 
	  if($this->session->flashdata("message")) 
	  {
	    echo $this->session->flashdata("message");
	  }
	?>
</body>
</html>