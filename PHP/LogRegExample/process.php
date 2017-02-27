<?php
session_start();
require("mysql-connection.php");
	if(isset($_POST["action"]) && $_POST["action"] == "register"){
		register_user($_POST);
	}

	else if(isset($_POST["action"]) && $_POST["action"] == "login"){
		login_user($_POST);
	}
	else{
		session_destroy();
		header('location: index.php');
		die();
	}


function login_user($post){
	$email = $post['email'];
	$password = $post['password'];
	$query = "SELECT * FROM users WHERE users.email = '{$email}'";
	$result = fetch_all($query);
	$epass = md5($password."boop".($result[0]['salt']));

	if($result[0]['password'] == $epass) {
		header("location: success.php");
		die();
	}else {
		$_SESSION['errors'][] = "Please enter the correct email or password";
		header('location: index.php');
		die();
	}
}

function register_user($post){
	$query = "SELECT * FROM users WHERE users.email = '".$post['email']."'";
	$result = fetch_all($query);

	$_SESSION['errors'] = array();

	if(empty($post['first_name'])){
		$_SESSION['errors'][] = "First name can't be blank!";
	}
	if(empty($post['last_name'])){
		$_SESSION['errors'][] = "Last name can't be blank!";
	}
	if(empty($post['password'])){
		$_SESSION['errors'][] = "Password field is required!";
	}
	if($post['password'] !== $post['confirm_password']){
		$_SESSION['errors'][] = "Password must match!";
	}
	if( ! filter_var($post['email'], FILTER_VALIDATE_EMAIL)){
		$_SESSION['errors'][] = "Please use a valid email address!";
	}
	if($post['email'] == $result[0]['email']){
		$_SESSION['errors'][] = "Your email is already registered, please sign in!";
	}
		

	if(count($_SESSION['errors']) > 0){
		header('location: index.php');
		die();
	}else{

		$email = $post['email'];
		$first_name = $post['first_name'];
		$last_name = $post['last_name'];
		$password = $post['password'];
		$salt = bin2hex(openssl_random_pseudo_bytes(22));
		$epass = md5($password."boop".$salt);
		$query = "INSERT INTO users(first_name, last_name, password, email, created_at, updated_at, salt)
					VALUES ('{$first_name}', '{$last_name}', '{$epass}', '{$email}', NOW(), NOW(), '{$salt}')";
		run_mysql_query($query);
		header("location: success.php");
		die();
	}
}
?>