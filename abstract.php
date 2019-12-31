<?php
/*
Abstract classes are the classes in which at least one method is abstract. Unlike C++ abstract classes in PHP are declared with the help of abstract keyword. Use of abstract classes are that all base classes implementing this class should give implementation of abstract methods declared in parent class. An abstract class can contain abstract as well as non abstract methods.

we cant not create the object of abstract class
 */
abstract class BaseEmployee{
	public $firstname;
	public $lastname;

	public function __construct($fname , $lname){
		$this->firstname = $fname;
		$this->lastname  = $lname;
	}
	public function getFullName(){
		return $this->firstname .":".$this->lastname; 
	}
	public abstract function getMonthlySalary($salary);
}

class FulltimeEmployee extends BaseEmployee{
	public $monthlysalary;
	public function getMonthlySalary($salary){
		return $this->monthlysalary = $salary/12;
	}
}
class ContractEmployee extends BaseEmployee{
	public $monthlysalary;
	public function getMonthlySalary($salary){
		return $this->monthlysalary = $salary * 30;
	}
}

// $baseemp = new BaseEmployee('ajay','bhatt');
// echo "Base employee"."<br>";
// echo $baseemp->getFullName();
// echo "<br>";

$fulltime = new FulltimeEmployee('sameer','ahmad');
echo "full time employee"."<br>";
echo $fulltime->getFullName();
echo "<br>";
echo $fulltime->getMonthlySalary(60000);
echo "<br>";

$contract = new ContractEmployee('Aman','kumar');
echo "Contract employee"."<br>";
echo $contract->getFullName();
echo "<br>";
echo $contract->getMonthlySalary(50);


?>