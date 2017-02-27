<!DOCTYPE html>
<html>
<head>
	<title>Destroy Page</title>
</head>
<body>
	<h1>Are you sure you want to delete?</h1>
	<p>Name : <?php echo $name; ?></p>
	<p>Description: <?php echo $description ?></p>

	<form action="/" method="post">
		<input class='btn' type="submit" value='no'>
	</form>
	<form action="/courses/delete/<?= $id; ?>" method='post'>
		<input class="btn" type="submit" value="Yes, I want to delete this">
	</form>
</body>
</html>