<?php 

$a = array("shanto","Nabil","Mosharof","Amzad","Shupti","sourov");

$b = array("Eftekhar","Lipi Akter"); //frist add korce

echo "<pre>";

array_splice($a,count($b),0,$b);

print_r($a);










?>