<?php
	require 'users-connection.php';
	session_start();
	$errors = array();
	

	if(isset($_POST["email"]) && $_POST["email"] !=null){
		if( ! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
			$errors[] = "Email is not valid";
		}
	}else if(isset($_POST["email"]) && $_POST["email"] ==null){
		$errors[] = "Email should not be empty";
	}

	if(! empty($errors)){
		$_SESSION['errors'] = $errors;
		header('Location: index.php');
	}else{
		$current_time = date("Y-m-d H:i:s");
		$sql_statement = "INSERT INTO users (email, password, created_at, updated_at) VALUES ('".$_POST['email']."', '".$_POST['password']."', '".$current_time."', '".$current_time."')";
		mysqli_query($connection, $sql_statement);
		$_SESSION['new_email']=$_POST["email"];
		header('Location: success.php');
	}
?>