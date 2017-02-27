<?php

class Deck{

	private $cards;

	function __construct(){
		$this->reset();
		$this->shuffle();
	}

	function shuffle(){
		shuffle($this->cards);
	}

	function reset(){
		$this->cards=array();
		for($suit=1; $suit<=4; $suit++){
			for($number=1; $number<=13; $number++){
				$suit_string=(string)$suit;
				$number_string=(string)$number;
				switch($suit){
					case 1:
						$suit_string = "D";
						break;
					case 2:
						$suit_string = "H";
						break;
					case 3:
						$suit_string = "S";
						break;
					case 4:
						$suit_string = "C";
						break;
				}
				switch($number){
					case 1:
						$number_string = "A";
						break;
					case 11:
						$number_string = "J";
						break;
					case 12:
						$number_string = "Q";
						break;
					case 13:
						$number_string = "K";
						break;
				}
				array_push($this->cards, $number_string."-".$suit_string);
			}
		}	
	}

	function deal(){
		return array_pop($this->cards);
	}
}

$deck = new Deck();
$deck->deal();


class Player{

	public $hand=array();

	function __construct(){
		$this->reset();
		$this->shuffle();
	}

	function discardACard($card){

	}

	function drawACard($card){
		array_push($this->hand, $card)

	}
}











?>