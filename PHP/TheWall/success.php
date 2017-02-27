<?php
session_start();
require_once('mysql-connection.php'); 

	if(!(isset($_SESSION['user_id'])&& $_SESSION['user_id'] != null)){
		header('location: index.php');
	}

	$query = "SELECT * FROM users WHERE id = {$_SESSION['user_id']}";
	$user = fetch_record($query);
	

	if(isset($_POST['new_message'])){
		$query = "INSERT INTO messages(message, created_at, updated_at, user_id)
					VALUES ('{$_POST['new_message']}', NOW(), NOW(), '{$_SESSION['user_id']}')";
		$result=run_mysql_query($query);
		var_dump($query);
	}
	if(isset($_POST['comment'])){
		$query = "INSERT INTO comments(comment, created_at, updated_at, message_id, user_id)
					VALUES ('{$_POST['comment']}', NOW(), NOW(), '{$_POST['message_id']}', '{$_SESSION['user_id']}')";
		$result=run_mysql_query($query);
	}

	$query="SELECT * FROM messages ORDER BY created_at DESC";
	$messages=fetch_all($query);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	textarea{
		width: 100%;
		height: 100px;
	}
	h3, a{
		display: inline-block;
		padding-left:20px;
		
		
	}
	
	h2{
		text-align: center;
	}

	</style>
</head>
<body>
	<h2>Coding Dojo Wall</h2>
	<h3>Welcome <?php echo $user['first_name'] ?> </h3>
	<a href='process.php'>LOG OFF!</a><br>
	<p>Post a message</p>
	<form id="new_message" action="success.php" method="post">
	<textarea name="new_message" row="200" cols="100" placeholder='Post a message'></textarea>
	<input type="submit">
	</form>
	<?php
	foreach($messages as $message){
		$query="SELECT * FROM users WHERE id={$message['user_id']}";
		$message_user = fetch_record($query);
		echo $message_user['first_name']."&nbsp;".$message_user['last_name']."&nbsp;-&nbsp;".$message['created_at']."<br>";
		echo "<p>".$message['message']."</p>";
		echo "<form action='success.php' method='post'>";
		
		$query="SELECT * FROM comments WHERE message_id={$message['id']} ORDER BY created_at ASC";
		$comments=fetch_all($query);
		

		foreach($comments as $comment){
			$query="SELECT * FROM users WHERE id={$comment['user_id']}";
			$comment_user = fetch_record($query);
			echo $comment_user['first_name']."&nbsp;".$comment_user['last_name']. "&nbsp;-&nbsp;". $comment['created_at']."<br>";
			echo $comment["comment"]."<br><br>";
		}

		echo "<p>Post a comment</p>";
		echo "<input type='text' value={$message['id']} name='message_id' hidden>";
		echo"<textarea name='comment' placeholder='Post a comment'></textarea>";
		echo"<input type='submit'>"; 
		echo"</form>"."<hr>";
	}
	?>

</body>
</html>
