<!DOCTYPE html>
<html>
<head>
	<title>Ninja Gold</title>
	<link rel="stylesheet" type="text/css" href="assets/style.css">
	<style media="screen">
		/*div{
			width:200px;
			height: 200px;
			border: 1px solid black;
			display: inline-block;
		}
		b{
			display: block;
		}
		.green{
			color:green;
		}
		.red{
			color:red;
		}*/
	</style>
</head>
<body>
	<div class="gold">
		<span>Your Gold:</span>
		<input type="text" name="your-gold" value="" disabled>
	</div>
	<div class="restart">
		<form id="restart-form" action="/home/process" method="post">
			<input type="hidden" name="action" value="restart_form">
			<input type="submit" class="btn" value="Start Over">
		</form>
	</div>
	<div class="clear"></div>
	<div class="building">
		<h3>Farm</h3>
		<p>(earns 10-20 golds)</p>
		<form action="/home/process" method="post">
			<input type="hidden" name="building" value="farm">
			<input type="submit" class="btn" value="Earn Gold!">
		</form>
	</div>
	<div class="building">
		<h3>Cave</h3>
		<p>(earns 5-10 golds)</p>
		<form action="home/process" method="post">
			<input type="hidden" name="building" value="cave">
			<input type="submit" class="btn" value="Earn Gold!">
		</form>
	</div>
	<div class="building">
		<h3>House</h3>
		<p>(earns 2-5 golds)</p>
		<form action="home/process" method="post">
			<input type="hidden" name="building" value="house">
			<input type="submit" class="btn" value="Earn Gold!">
		</form>
	</div>
	<div class="building">
		<h3>Casino</h3>
		<p>(earns/takes 0-50 golds)</p>
		<form action="home/process" method="post">
			<input type="hidden" name="building" value="casino">
			<input type="submit" class="btn" value="Earn Gold!">
		</form>
	</div>
	<div class="clear"></div>
	<div class="log">
		<span>Activity:</span>
		<div id="log"></div>
	</div>
</body>
</html>