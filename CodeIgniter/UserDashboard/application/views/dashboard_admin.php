<html>
<head>
	<title>Manage Users</title>
</head>
<body>
	<a href='/dashboard/admin'>Dashboard</a>
	<a href='/users/edit'>Profile</a>
	<a href="/signin/logout">Log off</a>
	<button type="submit" name="add_user"><a href="/users/new">Add User</a></button> 
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
					<td><?php 
					if($user['user_level'] == 9)
					{
						echo "Admin";
					}
					else
					{
						echo "Normal";
					}
					 ?></td>
					<td><a href="/users/edit/<?php echo $user['id']?>">edit</td>
					<td><a href="/users/remove/<?php echo $user['id']?>">remove</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>

</body>
</html>