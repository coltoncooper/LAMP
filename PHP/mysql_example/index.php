<?php 
	require('db-connection.php'); 

	$query = "SELECT * FROM countries";
	$countries = fetch($query);
	
?>

<html>
<head>
	<title>MySQL Example</title>
</head>
<body>
<?php 
	foreach ($countries as $country) {
		echo $country['name'].' - '.$country['continent'].' - '.$country['region'].'<br>'  ;
	}
?>

</body>
</html>