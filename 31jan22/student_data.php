<?php 

	class myfile
	{

		public function find(){
			$fh = fopen("results.txt", 'r');
			while(!feof($fh)){
				$data = fgets($fh);
				echo $data . "<br>";
			}
		}
	}
	
$obj = new myfile();
$obj->find();

 ?>