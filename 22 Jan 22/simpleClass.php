<?php 

class simpleClass

{
	private $x;
	protected $y = "Shanto Sikder";
	public const A = "Somthing";

	public function info(){
		return $this->x = "Hello Shanto";
	}
}

	$obj1 = new simpleClass;
	echo $obj1->info();

	echo simpleClass::A;

	simpleClass::info();



 ?>