<!DOCTYPE html>
<html>
<head>
	<title>Edit Used with User ID</title>
</head>
<body>
	<a href='/dashboard/admin'>Dashboard</a>
	<a href='/users/edit'>Profile</a>
	<a href="/signin/logout">Log off</a>
	<h3>Edit User #<?php echo $user['id'] ?></h3>
	<h2>Edit Information</h2>
	<form action="/users/edit_profile_with_id" method="post">
		<input type="hidden" name="id" value=<?php echo $user['id'] ?>>
		<label>Email</label><br>
		<input type='text' name="email" value=<?php echo $user['email'] ?>><br>
		<label>First Name</label>
		<input type="text" name="first_name" value=<?php echo $user['first_name'] ?>><br>
		<label>Last Name</label>
		<input type="text" name="last_name" value=<?php echo $user['last_name'] ?>><br>
		<select name='user_level'>
			<?php 
			if ($user['user_level']==9){
				echo "<option value=0>Normal</option>";
		  		echo "<option value=9 selected='selected'>Admin</option>";
			}else{
			  echo "<option value=0 selected='selected'>Normal</option>";
			  echo "<option value=9>Admin</option>";
			}	
		 	?>
		</select>




		<input type="submit" value="Save"><br><br>
	</form>

	<h2>Change Password</h2>
	<form action="/users/update_password_with_id" method="post">
		<input type="hidden" name="id" value=<?php echo $user['id'] ?> >
		<label>Password</label><br>
		<input type='password' name="password"><br>
		<label>Password Confirmation</label>
		<input type="password" name="confirm_password"><br>
		<input type="submit" value="Update Password"><br><br>
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