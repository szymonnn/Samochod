<?php
include_once "Car.php";
include_once "Engine.php";
include_once "SportCarInterface.php";
class SportCar extends Car implements SportCarInterface{
	private $engine;

	public function __construct (){	
	}

	public function getVMax(){
		return $this->engine->getPower() * 2;
	}
    
    public function getAccelerate(){
    	return $this->engine->getPower() * 3;
    }

    public function tuning ($engine){
    	$this->engine = $engine;
    }

    public function getParams (){
    	return "Prędkość maksymalna: ".$this->getVmax()." Przyspieszenie: ".$this->getAccelerate();
    }
}
?>