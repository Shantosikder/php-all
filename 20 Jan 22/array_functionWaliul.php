<?php 
	
	// how to add elements on an array


	// $cars = array("Toyota", "Volvo", "BMW", "Marcedese");

	// //adding elements as last on an array

	// // array_unshift($cars, "Audi", "Ferarri");
	// array_push($cars, "Audi", "Ferarri", "Lamburgini");

	// echo "<pre>";
	// print_r($cars);

 ?>

 <?php 

 $cars = array("Toyota", "Volvo", "BMW", "Marcedese");

	//adding elements as last on an array

 	// //Remove first elements from an array
	// array_pop($cars);
	array_shift($cars);

	echo "<pre>";
	print_r($cars);

  ?>