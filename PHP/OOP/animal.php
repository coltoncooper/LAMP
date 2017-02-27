<?php

	class Animal{

		public $name;
		public $health;

		public function __construct($provided_name){
			$this->health=100;
			$this->name=$provided_name;
		}

		public function walk($walkCount){
			for($i=0; $i<$walkCount; $i++){
				$this->health-=1;
			}
		}

		public function run($runCount){
			for($i=0; $i<$runCount; $i++){
				$this->health-=5;
			}
		}


		public function displayHealth(){
			echo $this->name."&nbsp;".$this->health.'<br>';
		}
	}

	$animal= new Animal('tiger');
	$animal->walk(3);
	$animal->run(2);
	$animal->displayHealth();

	class Dog extends Animal{
		public function __construct($provided_name){
			$this->health=150;
			$this->name=$provided_name;
		}

		public function pet($petCount){
			for($i=0; $i<$petCount; $i++){
				$this->health+=5;
			}
		}
	}

	$dog=new Dog('poodle');
	$dog->walk(3);
	$dog->run(2);
	$dog->pet(1);
	$dog->displayHealth();

	class Dragon extends Animal{
		public function __construct($provided_name){
			$this->health=170;
			$this->name=$provided_name;
		}

		public function fly($flyCount){
			for($i=0; $i<$flyCount; $i++){
				$this->health-=10;
			}
		}
	}

	$dragon= new Dragon('dragonBall');
	$dragon->walk(3);
	$dragon->run(2);
	$dragon->fly(1);
	$dragon->displayHealth();





?>