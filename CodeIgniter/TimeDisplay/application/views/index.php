<!DOCTYPE html>
<html>
<head>
	<title>Time Display</title>
	<style>
		body{
			text-align:center;
		}
		h1{
			border: 3px solid black;
			width:300px;
			height: 100px;
			margin: 0 auto;
		}

		h2{
			width: 300px;
			height:50px;
			margin: 0 auto;
			padding-top:5px;
		}

	</style>
</head>
<body>
	<h2>The current time and date:<h2>
	<h1> <?php echo $date,'<br>';?> 
		<?php echo $time,'<br>';?>
	</h1>
</body>
</html>