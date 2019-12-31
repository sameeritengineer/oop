<?php
//Function overriding occurs when you extend a class and rewrite a function which existed in the parent class:
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
