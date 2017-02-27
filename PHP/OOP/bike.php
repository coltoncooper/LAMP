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
}

$bike1 = new MyBike(20000, 100);
$bike2 = new MyBike(15000, 80);
$bike3 = new MyBike(30000, 150);

$bike1->drive();
$bike1->drive();
$bike1->drive();
$bike1->reverse();
$bike1->displayInfo();
echo"<br>"."<hr>";

$bike2->drive();
$bike2->drive();
$bike2->reverse();
$bike2->reverse();
$bike2->displayInfo();
echo"<br>"."<hr>";

$bike3->reverse();
$bike3->reverse();
$bike3->reverse();
$bike3->displayInfo();
echo"<br>"."<hr>";
?>