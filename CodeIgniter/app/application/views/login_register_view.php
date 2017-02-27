<html>
<head>
	<title>Login or Register</title>
	<link rel="stylesheet" type="text/css" href="assets/css/login_register.css">
</head>
<body>

	<div id='container'>
		<div id='header'>
			<h1 id='title'>Appointments</h1>
		</div>
		<div id='login'>
			<h2>Login</h2>
			<form action='<?= base_url('loginregister/signin') ?>' method='post'>
				<p>Email: <input type='text' name='email'></p>
				<p>Password: <input type='password' name='password'></p>
				<input type='submit' value='Login'>
			</form>
		</div>
		<h2>Register</h2>
		<div id='register'>
			<form action='<?= base_url('loginregister/registration') ?>' method='post'>
				<p>Name: <input type='text' name='name'></p>
				<p>Email Address: <input type='text' name='email'></p>
				<p>Birthdate: <input type='date' name='birthdate'></p>
				<p>Password: <input type='password' name='password'></p>
				<p>Confirm Password: <input type='password' name='confirm_password'></p>
				<input type='submit' value='Register'>
			</form>
		</div>

		<div id ='alerts'>
		<?php
			echo "<div id='success'>".$this->session->flashdata('success')."</div>";
			echo "<div id='error'>".$this->session->flashdata('errors')."</div>";
		?>
		</div>
	</div>
</body>
</html>