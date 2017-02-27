<?php
 header('Content-type: text/css');
 function randomColor(){
	$colorpick = array("blue", "red", "black","yellow","purple","silver", "green", "olive", "aqua");
	$random_color = rand(0,count($colorpick));
	return $colorpick[$random_color];
}
?>
h1 { color: <?php echo randomColor(); ?>; }
p  { color: <?php echo randomColor(); ?>; }

