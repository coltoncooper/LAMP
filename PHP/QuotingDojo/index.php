<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Quoting Dojo</title>
</head>
<body>
	<h1>Welcome to QuotingDojo</h1>
	<form action="process.php" method="post">
		Your name:<input type="text" name="name"><br>
		Your quote:<br><textarea name='quote' row="4" cols="40"></textarea><br>
		<input type="submit" value="Add my quote!">
		<input type="button" onClick="document.location.href='main.php'" value="Skip to quotes!">
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