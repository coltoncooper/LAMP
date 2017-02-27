<?php
		$states = array('CA', 'WA', 'VA', 'UT', 'AZ');
?>

<!DOCTYPE html>
<html>
<head>
	<title>States Array</title>
</head>
<body>

<?php 
		echo "<select name='states'>";
		for($i=0; $i < count($states); $i++){
		    echo "<option value=".$states[$i].">".$states[$i]."</option>";
		}
		echo "</select>";

		echo "<select name='states'>";
		foreach($states as $state){
		    echo "<option value=".$state.">".$state."</option>";
		}
		echo "</select>";

		echo "<select name='states'>";
		array_push($states, "NJ", "NY", "DE");
		foreach($states as $state){
		    echo "<option value=".$state.">".$state."</option>";
		}
		echo "</select>";
?> 
</body>
</html>

