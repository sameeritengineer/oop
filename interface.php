<?php
/* 
1)interface work same like abstract class but class not extends the interace, it implemets the interfaces.
2)private method can not be define in interface.
3)member variable can not define in interface.
 */
interface abc{
   public function data();
}
interface xyz{
	public function holder();
}

class sameer implements abc , xyz{
    public $sameer;
    public function data(){
    	return  $this->sameer;
    }
    public function holder(){
    	echo "holder";
    }
    public function __construct($name){
      $this->sameer = $name;
    }

}

$object = new sameer('sameer');
echo $object->data();
$object->holder();
?>