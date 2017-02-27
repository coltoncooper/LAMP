<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/style.css">
	<style>
		/*body{
			text-align:center;
		}
		h1{
			border: 2px solid black;
			width: 400px;
			margin: 0 auto;
		}*/
	</style>
</head>
<body>
	<h2>Random Word(attemp # <?php echo $counter ?> ) </h2>
	<h1> <?php echo $randomWord ?> </h1>
	<form action="/" method='post'>
		<button type='submit'>Generate</button>
	</form>

</body>
</html>