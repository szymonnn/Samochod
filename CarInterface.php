<?php 
interface CarInterface {
	public function getBrand();
	public function getModel();
	public function getColor();
	public function getType();
	public function setBrand($brand);
	public function setModel($model);
	public function setColor($color);
	public function setType($type);
}
?>