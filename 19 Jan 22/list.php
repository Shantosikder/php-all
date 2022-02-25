<?php 

// $colors = array["Red","Green","Blue","Yellow","Black"];

// list($col1,$col2,$col3,$col4,) = $colors;

// echo $col4; 


 ?>



 <?php 

function info(){
	
	$data = array();

	$data[] = "Shanto Sikder";
	$data[] = "23";
	$data[] = "Mirpur-2";
	$data[] = "National Polytacnic Institute Farmget,Dhaka.";

	return $data;
}

	list($a,$b,$c,$d) = info();

	echo "Student Name is : $a<br>";
	echo "Student Age is : $b<br>";
	echo "Student Address is : $c<br>";
	echo "Student Institute is : $d<br>";

//function list

  ?>