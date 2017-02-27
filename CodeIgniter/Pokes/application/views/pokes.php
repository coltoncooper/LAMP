<html>
<head>
	<title>Pokes Page</title>
</head>
<body>
	<a href="/main/logout">Logout</a>
	<h2>Welcome, <?php echo $this->session->userdata['name']; ?></h2>
	Total Poke history is here

	Poke history with names is here


	<p>People you may want to poke</p>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Alias</th>
				<th>Email Address</th>
				<th>Poke History</th>
				<th>Action</th>	
			</tr>
		</thead>
			<tbody>
				<?php foreach($users as $user){ ?>
				<tr>
					<td><?= $user['name'] ?></td>
					<td><?= $user['alias'] ?></td>
					<td><?= $user['email'] ?></td>
					<td><?= $user['poke_history'] ?></td>
					<td>
						<form action="pokes/pokes" method="post">
							<input type="submit" name="poke" value="poke">
						</form>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>