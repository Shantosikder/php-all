<?php 

$cars = array("Toyota", "Volvo", "BMW", "Marcedese");

array_pop($cars);

echo "<pre>";

print_r($cars);

//array pop ja last thake akta value delete kore dei

?>

<?php 

$cars = array("Toyota", "Volvo", "BMW");

array_push($cars,"Marcedese","TATA","Jagu");

echo "<pre>";

print_r($cars);

//array push ja last thake value add kore

?>


<?php 

$cars = array("Toyota", "Volvo", "BMW", "Marcedese");

array_shift($cars);

echo "<pre>";

print_r($cars);

//array shft frist thake data delete kore

?>

<?php 

$cars = array("Toyota", "Volvo", "BMW", "Marcedese");

array_unshift($cars,"TATA","Jagu","Ferari");

echo "<pre>";

print_r($cars);

//array unshft frist thake data add kore

?>

