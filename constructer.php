<?php

/* construtor and  destructor */
class point{
	private $name;
	public function __construct($name){
        $this->name = $name;
        $this->getname();
	}
	public function getname(){
		echo $this->name;
		echo "</br>";
	}
	public function __destruct(){
		echo "</br>";
		echo "good bye";
		echo "</br>";
	}
}
//$object = new point("Raju");

/* static */
define('this','this is this');
class staticclass{
	const PI = 3.14;
	public static $name = "sameer ahmad";
	public static function getname(){
		return self::$name;
	}
}
echo staticclass::$name;
echo staticclass::getname();
echo staticclass::PI;
echo this;

?>