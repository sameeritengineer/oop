<?php
//Function overloading occurs when you define the same function name twice (or more) using different set of parameters. For example

// class SumofNumbers{
// 	public function sum($a,$b){
// 		return $a+$b;
// 	}
// 	public function sum($a,$b,$c){
// 		return $a+$b+$c;
// 	}
// }

// $object = new SumofNumbers();
// echo $object->sum(5,10);


class SumofNumbers{
	function __call($name,$arg){
		 if($name == 'sum'){
		 	$count = count($arg);
            switch ($count) {
            	case 1:
            		return 0;
            		break;
            	case 2:
            		return $arg[0]+$arg[1];
            		break;
            	case 3:
            		return $arg[0]+$arg[1]+$arg[2];
            		break;		
            }

		 }
	}
}
$object = new SumofNumbers();
echo $object->sum(4,6);
echo "</br>";
echo $object->sum(4,6,3);
?>