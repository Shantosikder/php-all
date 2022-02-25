<?php 

// class Employee{
// 	private $name;
// 	private $age;

// 	public function setNameage($x,$y){
// 		 $this->name = $x;
// 		 $this->age=$y;
// 	}
	

// 	public function getName(){
// 		return $this->name;
// 	}

// 	public function getage(){
// 		return $this->age;
// 	}
// 	public function getabc(){
// 		 $shanto = "Hello,{$this->name}{$this->age}";
// 		 return $shanto;
// 	}
// }

// 	$emp = new Employee;
// 	$emp->setNameage("Shanto Sikder  ",23);

// 	echo $emp->getabc();

 ?>

 <?php 

 class Employee{

	private $name;
	private $age;

	public function setNameage($x,$y){
		$this->name=$x;
		$this->age=$y;
	}

	public function getName(){
		return $this->name;
	}
	public function getage(){
		return $this->age;
	}
	public function getresult(){
		$output = "Hello,{$this->name} Your Age is {$this->age}";
		return $output;
	}
 }

 $rlt = new Employee;
 $rlt->setNameage("Shanto Sikder ",23);

 echo $rlt->getresult();
 
 
 ?>