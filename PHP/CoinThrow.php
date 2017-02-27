
<h3>Starting the program</h3>
<?php

function coinThrow($attempt){

	$coinface = array("head", "tail");
	$key = array_rand($coinface);
	$number1 = rand(1,5000);
	$number2 = rand(1,5000);

	
	echo "Attempt #".$attempt."  Throwing a coin.... "."It's a ".$coinface[$key]."!...Got ".$number1." so far and ".$number2." so far."."<br>";
	
};
	for($i=1; $i<=5000; $i++){
			coinThrow($i);
	}
?>
<h3>Ending the program - thank you!</h3>
