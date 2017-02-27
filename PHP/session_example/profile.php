<h1>Profile Page</h1>
<?php

session_start();
if(isset($_SESSION["user_name"])){
	echo "Hello";
}else{
	header('location: login.php');
}


?>