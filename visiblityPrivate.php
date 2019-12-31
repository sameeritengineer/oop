<?php

class house{
	private $name;
	public function getdata(){
		return $this->name = 'sameer';
	}
}
$object_house = new house();
echo $object_house->getdata();


?>