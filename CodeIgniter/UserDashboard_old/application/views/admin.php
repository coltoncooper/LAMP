<html>
<head>
	<title>Manage Users</title>
</head>
<body>
	<button type="submit" name="add_user"><a href="/users/add_user">Add User</a></button> 
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Created At</th>
				<th>User Level</th>
				<th>Action</th>	
			</tr>
		</thead>
			<tbody>
				<?php foreach($users as $user){ ?>
				<tr>
					<td><?= $user['id'] ?></td>
					<td><?= $user['first_name']."&nbsp".$user['last_name'] ?></td>
					<td><?= $user['email'] ?></td>
					<td><?= $user['created_at'] ?></td>
					<td><?= $user['is_admin'] ?></td>
					<td><a href=" / <?= $user['id']; ?>">edit</td>
					<td><a href=" / <?= $user['id']; ?>">remove</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>

</body>
</html>