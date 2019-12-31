<?php

class house{
	protected $name;
	public function getdata(){
		return $this->name = 'sameer';
	}
}
class door extends house{
	function getinfo(){
		return $this->name = 'aman';
	}
}
$object_house = new house();
$object_door  = new door();
 echo "access inside the class ".$object_house->getdata()."<br>";
 echo "access through extend class ".$object_door->getinfo()."<br>";


?>