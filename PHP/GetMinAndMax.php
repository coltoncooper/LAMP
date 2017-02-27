<?php

function getMinMax($arrayNum){

	$max = $arrayNum[0];
	$min = $arrayNum[0];
	

	for($i=1; $i < count($arrayNum); $i++){
		if($arrayNum[$i] > $max){
			$max = $arrayNum[$i];
		}
		if($arrayNum[$i] < $min){
			$min = $arrayNum[$i];
		}
	}
	$output= array("max" => $max, "min" => $min);
	var_dump($output);
	
}
$input = array( 135, 2.4, 2.67, 1.23, 332, 2, 1.02);
getMinMax($input);

?>
