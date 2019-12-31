<?php

class person{
	public $name;
	public function setName($name){
		$this->name = $name;
	}
	public function getName(){
		return $this->name;
	}
}
class emp extends person{
	public $salary;
    public function __construct($name,$salary){
    	$this->setName($name);
    	$this->salary = $salary;
    }
    public function getSal(){
    	return $this->salary;
    }
    public function whoAmI(){
    	
    }
}
$obj = new emp('Harpreet',500);
echo "My name is ".$obj->getName()." And my salary is ".$obj->getSal(); 

?>