<?php 

class myfile{
	public function find(){
		$fh = fopen("myStudentInfo.txt", 'r');
		while(! feof($fh)){
			$data = fgets($fh);
			echo($data."<br>");
		}
	}
}

$obj1 = new myfile();
$obj1->find();


 ?>