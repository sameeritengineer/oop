<?php
//final class person{
class person{
	final public function persondata(){
		echo "i am person data";
	}
}
class employee extends person{
	public function persondata(){
		echo "i am employye data";
	}
}

?>