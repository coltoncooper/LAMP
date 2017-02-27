<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Email Validation with DB</title>
</head>
<body>
	<form action="process.php" method="post">
		email:<input type="text" name="email"><br>
		password:<input type="password" name="password"><br>
		<input type="submit" name="submit">
	</form>
	<?php

		if(isset($_SESSION["errors"])){
			foreach($_SESSION["errors"] as $error){
				echo $error;
			}

			$_SESSION = array();
		}
	?>
</body>
</html>