<html>
<head>
	<title>All Users</title>
</head>
<body>
	<a href='/dashboard/admin'>Dashboard</a>
	<a href='/users/edit'>Profile</a>
	<a href="/signin/logout">Log off</a>
	
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Created At</th>
				<th>User Level</th>
				
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
				</tr>
			<?php } ?>
		</tbody>
	</table>

</body>
</html>