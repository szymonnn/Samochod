<?php
include_once "EngineInterface.php";
class Engine implements EngineInterface{
	private $power;
	public function __construct ($power){
		$this->power = $power;
	}
	public function getPower(){
		return $this->power;
	}
}
?>