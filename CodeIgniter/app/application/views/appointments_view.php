<html>
<head>
	<title>Appointments</title>
	<link rel="stylesheet" type="text/css" href="assets/css/login_register.css">
</head>
<body>
	<?php 
		date_default_timezone_set("America/Los_Angeles");
		$current_time = date('H:i:s');
		// var_dump($this->session->all_userdata());
		$user = $this->session->userdata('user');
		$appts = $this->session->userdata('appointments');
	?>
	<div id='container'>
		<div id='header'>
			<h1 id='title'>Appointments</h1>
			<h3>Hello, <?= $user['Name'] ?> </h3> 
			 <a href="<?= base_url('loginregister/logout') ?>">Logout</a>
		</div>
		
		 <h4>Here are your appointments for today: <?php echo date('l, M d, Y'); ?> </h4>
		 <table>
		 	<thead>
		 		<tr>
			 		<th>Tasks</th>
			 		<th>Time</th>
			 		<th>Status</th>
			 		<th>Edit</th>
			 		<th>Delete</th>
			 	</tr>
		 	</thead>
		 	<tbody>
		 		<?php 
		 		foreach($appts as $appt)
		 		{
		 			if($appt['status'] !== 'Completed' && $current_time > $appt['time'])
		 			{
		 				$appt['status'] = 'Missed';
		 			}
		 		?>
		 		<tr>
			 		<td> <?= $appt['name'] ?> </td>
			 		<td> <?= date('h:i a', strtotime($appt['time'])); ?> </td>
			 		<td> <?= $appt['status'] ?> </td>
			 		<td>
			 			<form action='<?= base_url('appointments/edit') ?>' method='post'>
			 				<input type='hidden' name='appt_id' value='<?= $appt['id'] ?>'>
			 				<input type='submit' value='Edit'>
			 			</form>
			 		</td>
			 		<td>
			 			<form action='<?= base_url('appointments/delete') ?>' method='post'>
			 				<input type='hidden' name='appt_id' value='<?= $appt['id'] ?>'>
			 				<input type='submit' value='Delete'>
			 			</form>
			 		</td>
		 		</tr>
		 		<?php
		 		}
		 		 ?>

		 	</tbody>
		 </table>
		 <h2>Add Appointment</h2>
		 <form id='add_appt' action='<?= base_url('appointments/add_appointment') ?>' method='post'>
		 	<input type='hidden' name='user_id' value='<?= $user['id'] ?>'>
		 	<label for='task'>Tasks: </label>
		 	<input type='text' name='task' placeholder='Task'>
		 	<label for'date'>Date: </label>
		 	<input type='date' name='date'>
		 	<label for'time'>Time: </label>
		 	<input type='time' name='time'>
		 	<input type='submit' value='Add Appointment'>
		 </form>
		 <div id='alerts'>
			 <div id='error'>
			 <?php 
			 echo $this->session->flashdata('errors');
			  ?>
			  </div>
			  <div id='success'>
			  <?php 
			  echo $this->session->flashdata('success');
			   ?>
			  </div>
		  </div>
	</div>
</body>
</html>