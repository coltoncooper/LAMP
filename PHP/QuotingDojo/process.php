<?php
	require "connection.php";
	session_start();

	$errors = array();

	if(isset($_POST['name']) && $_POST['name'] ==null){
		$errors[] = "Name should not be empty".'<br>';
	}
	if(isset($_POST['quote']) && $_POST['quote'] ==null){
		$errors[] = "Quote should not be empty";
	}
	

	if(! empty($errors)){
		$_SESSION['errors'] = $errors;
		header('Location: index.php');
	}else{
		$current_time = date("Y-m-d H:i:s");
		$sql_statement = "INSERT INTO users (names, quotes, created_at, updated_at) VALUES ('".$_POST['name']."', '".$_POST['quote']."', '".$current_time."', '".$current_time."')";
		mysqli_query($connection, $sql_statement);
		header('Location: main.php');
	}
?>