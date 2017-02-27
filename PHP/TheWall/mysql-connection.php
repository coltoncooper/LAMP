<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root'); //set DB_PASS as 'root' if you're using mac
define('DB_DATABASE', 'thewall'); //make sure to set your database

//connect to database host
$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);

function fetch_all($query)
{
	$data = array();
	global $connection;
	$result = $connection->query($query);

	while($row = mysqli_fetch_assoc($result)){
		$data[] = $row;
	}
	return $data;
}

function fetch_record($query){
	global $connection;
	$result = $connection->query($query);
	return mysqli_fetch_assoc($result);
}

function run_mysql_query($query){
	global $connection;
	$result = $connection->query($query);
}

?>