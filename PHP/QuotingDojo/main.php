<?php 
require "connection.php";
session_start(); 
$sql_statement ="SELECT names, quotes, created_at FROM quotingdojo.users;";
$sql_list = fetch($sql_statement);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Quoting Dojo</title>
</head>
<body>
	<h1>Here are the awesome quotes!</h1>
	<?php
		foreach($sql_list as $list){
			echo '"'.$list['quotes'].'"'."<br>";
			echo $list['names']."&nbsp;"; 
			echo $list['created_at']."<br>";
			echo "<hr>".'<br>';
		}
	?>
</body>
</html>