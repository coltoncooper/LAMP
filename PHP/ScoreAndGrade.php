<?php
		function scoreAndGrade($scoreInput){
			$max = 100;
				if($scoreInput < 70){
					echo "<h1>"."Your Score: ". $scoreInput."/". $max."</h1>". "<br>"."<h2>" ."Your grade is D". "</h2>" ."<br>";
				}else if($scoreInput < 80){
					echo "<h1>"."Your Score: ". $scoreInput."/". $max."</h1>" ."<br>"."<h2>". "Your grade is C". "<h2>". "<br>";
				}else if($scoreInput < 90){
					echo "<h1>". "Your Score: ". $scoreInput."/". $max."</h1>". "<br>"."<h2>" . "Your grade is B"."</h2>" . "<br>";
				}else if($scoreInput <= 100){
					echo "<h1>"."Your Score: ". $scoreInput."/". $max."</h1>". "<br>"."<h2>" . "Your grade is A"."</h2>" . "<br>";
				}else{
					echo "Please enter score between 50 - 100";
				}
		};

		for($i=0; $i<100; $i++){
			$max = 100;
			$min = 50;
			$score = rand($min, $max);
			scoreAndGrade($score);
		}
?>