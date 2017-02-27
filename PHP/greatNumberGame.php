<?php session_start(); ?>
<html>
<head>
	<title>Great Number Game</title>
	<style>
	body{
		text-align: center;
	}
	.background-box{
		width: 250px;
		height: 250px;
		border: 2px solid black;
		color: white;
		padding-top: 10px;
		text-align: center;
		margin: 0 auto;
		margin-bottom: 20px;
		font-size: 25px;
	}
	.red{
		background-color:red;
	}
	.green{
		background-color:green;
	}
	</style>
</head>
<body>
	<h2>Welcome to The Great Number Game!<h2>
	<h3>I am thinking of a number between 1 and 100<h3>
	<h3>Take a guess!</h3>

<form action="greatNumberGame.php" method="post">

<?php 
	function display_input_form(){
		echo '<input type="text" name="guessNumber"><br>';		
		echo '<input type="submit" name="Submit">';
	}

	if(!isset($_SESSION["random_game_number"])){
		$_SESSION["random_game_number"] = rand(1,100);
	}
	if ($_SERVER['REQUEST_METHOD'] === 'GET'){
		display_input_form();
	}else{
		if(isset($_POST["guessNumber"])){
			display_input_form();
			$_SESSION["random_game_number"] = rand(1,100);
		}
	}

	if(isset($_POST["guessNumber"])){
		if($_POST["guessNumber"] < $_SESSION["random_game_number"]){
			echo '<div class="background-box red">Too low!!</div>';
			display_input_form();

		}else if($_POST["guessNumber"] > $_SESSION["random_game_number"]){
			echo '<div class="background-box red">Too high!!</div>';
			display_input_form();
		}else{
			echo '<div class="background-box green">'.$_SESSION["random_game_number"]." was the number".'<br><input type="submit" name="Play Again"></div>';
			echo '';
		}
	}
	echo $_SESSION["random_game_number"];
?>

</form>

</body>
</html>