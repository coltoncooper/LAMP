<?php

function drawStars($inputArray){

	foreach($inputArray as $value){
		if(is_numeric($value)){
			echo str_repeat("*", $value)."<br>";
		}	
	}
}

$x = array(4, 6, 1, 3, 5, 7, 25);
drawStars($x);




function secondDrawStars($inputArray){

	foreach($inputArray as $value){
		if(is_numeric($value)){
			echo str_repeat("*", $value)."<br>";
		}else{
			$first_letter = substr($value, 0, 1);
			$letter_count = strlen($value);
			echo $output = strtolower(str_repeat($first_letter, $letter_count))."<br>";
			
		}	
	}
}

$secondInput = array(4, "Tom", 1, "Michael", 5, 7, "Jimmy Smith");
secondDrawStars($secondInput);

?>