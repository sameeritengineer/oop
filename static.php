<?php

class house{

	public static $firstname = "sameer";
	public static $lastname  = "ahmad";

	public static function getname(){
		return self::$lastname;
	}

}
class door extends house{
	public static function bye(){
		return parent::$firstname;
	}
}

// echo house::$firstname."<br>";
// echo house::getname();

echo door::bye();

?>