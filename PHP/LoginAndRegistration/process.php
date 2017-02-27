<?php
	session_start();
	require("new_connection.php");

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

	function register_user($post){
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
		

		if(count($_SESSION['errors']) > 0){
			header('location: index.php');
			die();
		}else{
			$query = "INSERT INTO users(first_name, last_name, password, email, created_at, updated_at)
					VALUES ('{$post['first_name']}', '{$post['last_name']}', '{$post['password']}', '{$post['email']}', NOW(), NOW())";
			run_mysql_query($query);
			$_SESSION['success_message'] ="User successfully created!";
			header('location:index.php');
			die();
		}
	}

	function login_user($post){
		$query = "SELECT * FROM users WHERE users.password = '{$post['password']}'
				AND users.email = '{$post['email']}'";
		$user = fetch_all($query);
		if(count($user) > 0){
			$_SESSION['user_id'] = $user[0]['id'];
			$_SESSION['first_name'] = $user[0]['first_name'];
			$_SESSION['logged_in'] = TRUE;
			header('location: success.php');
		}
		else{
			$_SESSION['errors'][] = "can't find a user with those credentials";
			header('location: index.php');
			die();
		}
	}
?>