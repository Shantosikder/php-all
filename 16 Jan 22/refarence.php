<?php 

$value1 =  "Hello";

$value2 = &$value1; // Hello

$value2 = "Good Bye"; //Good Bye

echo $value1;

//echo $value2;



 ?>