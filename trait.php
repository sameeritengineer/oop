<?php
//PHP only supports single inheritance: a child class can inherit only from one single parent.
//So, what if a class needs to inherit multiple behaviors? OOP traits solve this problem.
trait employee{
	public function setemp($name){
		echo "I am employee".$name;
		echo "</br>";
	}
}
trait customer{
	public function setcus($name){
		echo "I am customer".$name;
		echo "</br>";
	}
}
class person{
	use employee;
	use customer;
}
$object = new person();
$object->setemp("sameer ahmad");
$object->setcus("sameer ahmad");

?>