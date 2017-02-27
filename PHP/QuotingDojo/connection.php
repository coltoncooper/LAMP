<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root'); //set DB_PASS as 'root' if you're using mac
define('DB_DATABASE', 'quotingdojo'); //make sure to set your database

//connect to database host
$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);

function fetch($query)
{
	global $connection;

	$result = mysqli_query($connection, $query);
	$rows = array();

	foreach($result as $row) {
		$rows[] = $row;
	}
	return $rows;

}	

?>