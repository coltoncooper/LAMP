<?php

class MyBike {

	public function __construct($price, $max_speed){
		$this->price=$price;
		$this->max_speed=$max_speed;
		$this->miles=0;
	}

	public function displayInfo(){
		echo "Price: " . $this->price . "<br>";
		echo "Max Speed: " .$this->max_speed . "<br>";
		echo "Miles: " .$this->miles . "<br>";
	}

	public function drive(){
    	echo "Driving: ".$this->miles+=10; echo'<br>'; 
	}

	public function reverse(){
        echo "Reversing: ".$this->miles-=5; echo'<br>';
        if($this->miles <0){
        	$this->miles=0;
        }
	}

	public function drive_time($times){
		for($i=0; $i<$times; $i++){
			$this->drive();
		}
	}

	public function reverse_time($times){
		for($i=0; $i<$times; $i++){
			$this->reverse();
		}
	}


}

$bike1 = new MyBike(20000, 100);
$bike2 = new MyBike(15000, 80);
$bike3 = new MyBike(30000, 150);


$bike1->drive_time(3);
$bike1->reverse_time(1);
$bike1->displayInfo();
echo"<br>"."<hr>";

$bike2->drive_time(2);
$bike2->reverse_time(2);
$bike2->displayInfo();
echo"<br>"."<hr>";

$bike3->reverse_time(3);
$bike3->displayInfo();
echo"<br>"."<hr>";
?>