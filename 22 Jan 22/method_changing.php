<?php 
class person
{
	private $name = "";
	private $age  = "";
	public function setName($n){
		$this->name = $n;
	}

	public function setAge($a){
		$this->age = $a;
	}
	public function getInfo(){
		echo "Hi! My Name is {$this->name} and Age is {$this->age}";
	}
}

$obj = new person;
$obj->setName("Shanto Sikder");
$obj->setAge(23);
$obj->getInfo();



 ?>