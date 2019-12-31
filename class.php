<?php

class house{
 public $name = 'sameer';
 public $age;
 public function __construct($name , $age){
 	$this->name = $name;
 	$this->age  = $age;
 }
 public function data(){
 	return "My name is ".$this->name." and my age is ". $this->age;
 }
}

$object = new house('dilawar',29);
echo $object->name;



?>