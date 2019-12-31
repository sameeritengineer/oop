<?php

class person{
	public function myname($name){
		echo "i am person and my name is ".$name;
		echo "</br>";
	}
}
class employee extends person{
	public function myname($name){
		echo "i am employee and my name is ".$name;
		echo "</br>";
	}
}
$person = new person();
$person->myname("Rajesh");
$employee = new employee();
$employee->myname("Aadesh");
?>
