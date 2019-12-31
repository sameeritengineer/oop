<?php
interface abc{
	public $name="sameer";
	public function a();
}
interface bcc{
	public function b();
}
class def implements abc,bcc{

    public function a(){
    	echo "hello world";
    }
    public function b(){
    	echo "world world";
    }

}
$obj = new def();
$obj->b();


?>