<?php 
session_start(); 

if($_POST["building"] == "farm"){
	$earned = rand(10,20);
	$_SESSION["gold"]+=$earned;
	array_unshift($_SESSION['color'],'green');
	array_unshift($_SESSION["activity"], "You went to the farm and earned"." ". $earned." gold!".date("m/d/Y h:i:s a", time()));
}elseif($_POST["building"] == "cave"){
	$earned = rand(5,10);
	$_SESSION["gold"]+=$earned;
	array_unshift($_SESSION["color"], 'green');
	array_unshift($_SESSION["activity"], "You went to the cave and earned"." ". $earned." gold!".date("m/d/Y h:i:s a", time()));
}elseif($_POST["building"] == "house"){
	$earned = rand(2,5);
	$_SESSION["gold"]+=$earned;
	array_unshift($_SESSION["color"], 'green');
	array_unshift($_SESSION["activity"], "You went to the house and earned"." ". $earned." gold!".date("m/d/Y h:i:s a", time()));
}elseif($_POST["building"] == "casino"){
	$earned = rand(-50,50);
	$_SESSION["gold"]+=$earned;
	if($earned<0){
		array_unshift($_SESSION["color"], 'red');
		array_unshift($_SESSION["activity"], "You went to the casino and lost"." ". $earned." gold!".date("m/d/Y h:i:s a", time()));
	}else{
		array_unshift($_SESSION["color"], 'green');
		array_unshift($_SESSION["activity"], "You went to the casino and earned"." ". $earned." gold!".date("m/d/Y h:i:s a", time()));
	}
}

header("Location: index.php");
?>