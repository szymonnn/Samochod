<?php
include_once "Car.php";
include_once "SportCar.php";
include_once "Engine.php";

$myCar = new Car("Toyota", "Corolla", "zielony", "sedan");
$otherCar = new Car("Volkswagen", "Passat", "biały", "combi");
//echo $myCar->helloCar();
//echo $otherCar->helloCar();
//echo $otherCar->getColor();
//$otherCar->setColor("niebieski");
//echo $otherCar->helloCar();
function theCar($car){
	return "Witaj! To ja Twój samochód: ".$car->getColor()." ".$car->getBrand()." ".$car->getModel()." ".$car->getType()."\n";
}
//echo theCar($otherCar);
$sportCar = new SportCar();
$sportCar->tuning(new Engine(100));
echo $sportCar->getParams()."\n"; 
echo "Zmiana silnika \n";
$sportCar->tuning(new Engine(300));
echo $sportCar->getParams()."\n"; 
?>