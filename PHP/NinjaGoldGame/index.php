<?php 
session_start(); 
if(!isset($_SESSION["gold"])){
	$_SESSION["gold"]=0;
}
if(!isset($_SESSION["activity"])){
	$_SESSION["activity"]=[];
}
if(!isset($_SESSION["color"])){
	$_SESSION["color"]=[];
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ninja Gold</title>
	<style media="screen">
		div{
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
		}
	</style>
</head>
<body>
	<b>Your Gold: <?=$_SESSION["gold"] ?></b>
	<div class="">
		<p>Farm</p>
		<p>(earns 10-20 golds)</p>
		<form class="" action="process.php" method="post">
			<input type="hidden" name="building" value="farm">
			<input type="submit" name="" value="Earn Gold!">
		</form>
	</div>
	<div class="">
		<p>Cave</p>
		<p>(earns 5-10 golds)</p>
		<form class="" action="process.php" method="post">
			<input type="hidden" name="building" value="cave">
			<input type="submit" name="" value="Earn Gold!">
		</form>
	</div>
	<div class="">
		<p>House</p>
		<p>(earns 2-5 golds)</p>
		<form class="" action="process.php" method="post">
			<input type="hidden" name="building" value="house">
			<input type="submit" name="" value="Earn Gold!">
		</form>
	</div>
	<div class="">
		<p>Casino</p>
		<p>(earns/takes 0-50 golds)</p>
		<form class="" action="process.php" method="post">
			<input type="hidden" name="building" value="casino">
			<input type="submit" name="" value="Earn Gold!">
		</form>
	</div>
	<b>Activity:</b>
	<?php foreach($_SESSION["activity"] as $key => $value){
	?>
		<p class="<?=$_SESSION['color'][$key]?>"><?=$value ?></p>
	<?php } ?>

	<?php echo'<input type="submit" name="Start Over">'?>


</body>
</html>