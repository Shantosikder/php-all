<?php 	

$cars = array("Volvo","Toyta","TATA","BMW");

foreach ($cars as $car ) {
	echo $car ."<br>";
}

 ?>



 <!ForEach End------------->



<h1>Covid-19 Bangladesh :</h1>

 <?php 

$conora_rates = array("January"=>1000, "February"=>2000, "March"=>3000,"Aprial"=>4000,"May"=>5000, );

foreach($conora_rates as $month => $number){

	echo $month.":--- Infacted Number ". $number ."<br>";
}

 ?>