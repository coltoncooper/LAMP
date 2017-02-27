<?php

$users = array( 
   array('first_name' => 'Michael', 'last_name' => 'Choi'),
   array('first_name' => 'John', 'last_name' => 'Supsupin'),
   array('first_name' => 'Mark', 'last_name' => 'Guillen'),
   array('first_name' => 'KB', 'last_name' => 'Tonel'),
   array('first_name' => 'Michael', 'last_name' => 'Choi'),
   array('first_name' => 'John', 'last_name' => 'Supsupin'),
   array('first_name' => 'Mark', 'last_name' => 'Guillen'),
   array('first_name' => 'KB', 'last_name' => 'Tonel'), 
   array('first_name' => 'Michael', 'last_name' => 'Choi'),
   array('first_name' => 'John', 'last_name' => 'Supsupin'),
   array('first_name' => 'Mark', 'last_name' => 'Guillen'),
   array('first_name' => 'KB', 'last_name' => 'Tonel'), 
    
);

?>

<!DOCTYPE html>
<html>
<head>
	<title>HTML Table Assignment</title>
	<style type = 'text/css'>
		td{
			border: 1px solid black;
			padding: 0px 10px;
		}
		table{
			border-collapse:collapse;
		}
		thead td{
			font-weight: bolder;
		}
	</style>
</head>
<body>
	<table>
		<thead>
			<td>User #</td>
			<td>First Name</td>
			<td>Last Name</td>
			<td>Full Name</td>
			<td>Full Name in Uppercase</td>
			<td>Length of Full Name</td>
		</thead>
		<tbody>
<?php
		foreach($users as $key => $value){
?>
			<tr>
				<td><?= $key +1 ?></td>
				<td><?= $value["first_name"] ?></td>
				<td><?= $value["last_name"] ?></td>
				<td><?= $value["first_name"] . " " . $value["last_name"]?></td>
				<td><?= strtoupper ($value["first_name"] . " " . $value["last_name"])?></td>
				<td><?= strlen ($value["first_name"]. $value["last_name"])?></td>
			</tr>
<?php
		}
?>


		</tbody>
	</table>
</body>
</html>