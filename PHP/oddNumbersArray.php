<?php 

$odd_numbers = array();

for($i = 1; $i < 20000; $i++){
	if($i % 2 == 1){
		array_push($odd_numbers, $i);
	}
}
var_dump($odd_numbers);
?>