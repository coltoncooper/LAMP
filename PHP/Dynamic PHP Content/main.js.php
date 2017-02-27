$(document).ready(function(){
  alert('<?php
		$num1 = rand(0,99);
		$num2 = rand(0,99);
		$total = $num1*$num2;
  		echo (string)$num1."x".(string)$num2."=".(string)$total; ?>');
});
