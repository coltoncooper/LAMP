<?php 

$odd_numbers = array();

for($i = 1; $i <= 2000; $i++){
	if($i % 2 == 0){
		echo "Number is"." ".$i .". This is an even number"."<br>";
	}else if($i % 2 == 1){
		echo "Number is"." ".$i .". This is an odd number"."<br>";
	}
}
?>