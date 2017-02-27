<?php
	require 'users-connection.php';
	session_start();
	$sql_statement="SELECT email, created_at FROM users.users;";
	$email_list=fetch($sql_statement);
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Success Page</title>
</head>
<body>

<?php
	if(isset($_SESSION["new_email"]) && $_SESSION["new_email"] != null){
		echo "The email address you entered ".$_SESSION["new_email"]." is a valid email address. Thank you!";
	}



?>
	
	<h2>Email Addresses Entered:</h2>
	
<?php
	foreach($email_list as $email){
		echo $email['email']."&nbsp;";
		echo $email['created_at']."<br>";
	}

?>
</body>
</html>