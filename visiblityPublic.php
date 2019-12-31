<?php

class house{
	protected $name = "sameer";
}
class door extends house{
	function getinfo(){
		return $this->name = 'aman';
	}
}
$object_house = new house();
$object_door  = new door();
echo "access inside the class ".$object_house->name."<br>";
echo "access outside the class ".$object_house->name = 'ajay'."<br>";
echo "access through extend class ".$object_door->getinfo()."<br>";


?>