<?php
include_once "CarInterface.php";

	class Car implements CarInterface{
		private $brand;
		private $model;
		private $color;
		private $type;

		public function __construct($brand, $model, $color, $type) {
			$this->brand = $brand;
			$this->model = $model;
			$this->color = $color;
			$this->type = $type;
		}

		public function helloCar(){
			return "Witaj! To ja Twój samochód: ".$this->color." ".$this->brand." ".$this->model." ".$this->type."\n";
		}

		public function getBrand(){
			return $this->brand;
		}
		public function getModel(){
			return $this->model;	
		}
		public function getColor(){
			return $this->color;
		}
		public function getType(){
			return $this->type;
		}
		public function setBrand($brand){
			$this->brand = $brand;
		}
		public function setModel($model){
			$this->model = $model;
		}
		public function setColor($color){
			$this->color = $color;
		}
		public function setType($type){
			$this->type = $type;
		}
	}

?>