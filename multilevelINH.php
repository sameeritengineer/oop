<?php

class a{
	public function abc(){
		echo "I am base class function abc";
	}
	public function def(){
		echo "I am base class a function def";
	}
}
class b extends a{
	public function def(){
		echo "I am derived class b function def";
	}
}


$obj = new b();
$obj->def();


?>