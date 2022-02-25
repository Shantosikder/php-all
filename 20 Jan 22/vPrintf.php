<?php 

$customers = array();

$customers[] = array("Shanto Sikder","shantosikder77@gmail.com","01799541685");
$customers[] = array("Rana","shantosikder77@gmail.com","01799541685");
$customers[] = array("Mizan","shantosikder77@gmail.com","01799541685");
$customers[] = array("Al Amin","shantosikder77@gmail.com","01799541685");
$customers[] = array("Shanto Sikder","shantosikder77@gmail.com","01799541685");
$customers[] = array("Rana","shantosikder77@gmail.com","01799541685");
$customers[] = array("Mizan","shantosikder77@gmail.com","01799541685");
$customers[] = array("Al Amin","shantosikder77@gmail.com","01799541685");

echo("<pre>");

foreach($customers as $customer){
	echo "\n";
	foreach($customer as $value){
		echo($value."\n");
	}
}


// for($i=0; $i<count($customers); $i++){
// 	print_r($customers[$i]);
// }


// print_r($customers);


// foreach($customers as $customer){
// 	vprintf("<p>Name: %s<br>Email: %s<br>Phone: %s</p>", $customer);
// }


 ?>