<?php

function multiply($int_list, $multiplication){

	$result = array();

	for($i=0; $i<count($int_list); $i++){
		array_push($result, $int_list[$i] * $multiplication);
	}
	return $result;
}
$b = multiply(array(2,3,4,5), 5);
var_dump($b);
?>