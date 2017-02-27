<?php  
class Car {
    public function __construct($price, $speed, $fuel, $mileage) {
        $this->price = $price;
        $this->speed = $speed;
        $this->fuel = $fuel;
        $this->mileage = $mileage;

        if($this->price >= 10000) {
            $this->tax = 0.15;
        } else {
            $this->tax = 0.12;
        }
    }

    public function displayAll() {
        echo "Price: " . $this->price . "</br>";
        echo "Speed: " . $this->speed . "</br>";
        echo "Fuel: " . $this->fuel . "</br>";
        echo "Mileage: " . $this->mileage . "</br>";
        echo "Tax: " . $this->tax . "</br>";
    }

}

$myFirstCar = new Car(2000, 35,'fuel', 5);
$mySecondCar = new Car(500, 100,'not full', 10);
$myThirdCar = new Car(30000, 60, 'empty', 40);
$myFourthCar = new Car(100000, 35, 'kind of full', 0);
$myFifth = new Car(200000, 45, 'half full', 40);


$myFirstCar->displayAll();
echo "<hr>";
$mySecondCar->displayAll();
echo "<hr>";
$myThirdCar->displayAll();
echo "<hr>";
$myFourthCar->displayAll();
echo "<hr>";
$myFifth->displayAll();
?>