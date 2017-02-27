<html>
<head>
	<title>Edit Appointment</title>
	<link rel="stylesheet" type="text/css" href="assets/css/login_register.css">
</head>
<body>
	<div id='container'>
	<?php 
		$appt = $this->session->userdata('appointment_to_edit');
		$user = $this->session->userdata('user');
		$date = date('Y-m-d', strtotime($appt['date']));
		$time = date('H:i:s', strtotime($appt['time']));
	 ?>
	<div id='header'>
		<h1 id='title'>Appointments</h1>
		<h3>Hello, <?= $user['Name'] ?> </h3> 
		 <a href="<?= base_url('loginregister/logout') ?>">Logout</a>
	</div>
	 <h2>Edit Appointment: <?= $appt['name'] ?></h2>
	 
	 <form action='<?= base_url('edits/update') ?>' method='post'>
	 	<input type='hidden' name='appt_id' value='<?= $appt['id'] ?>'>
	 	<label for='name'>Edit Name: </label>
	 	<input type='text' name='name' value='<?= $appt['name'] ?>'>
	 	<label for='date'>Edit Date: </label>
	 	<input type='date' name='date' value='<?= $date ?>'>
	 	<label for='date'>Edit Time: </label>
	 	<input type='time' name='time' value='<?= $time ?>'>
	 	<label for='status'>Edit Status: </label>
	 	<select type='dropdown' name='status'>
	 		<option>Pending</option>
	 		<option>Completed</option>
	 		<option>Missed</option>
	 	</select>
	 	<input type='submit' value='Edit'>
	 </form>
	 <a href="<?= base_url('appointments') ?>">Back</a>
	 <div id='error'>
	 	<?php 
	 		echo $this->session->flashdata('errors');
	 	 ?>
	 </div>
	 </div>
</body>
</html>