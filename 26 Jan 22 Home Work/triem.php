<?php 

//$str1 = "Hello "; //all space remove kore samne pice
//$str1 = trim($str1);

$str1 = "sHellos";
$str1 = trim($str1,'s'); //left/right thake muce jabe 
//$str1 = rtrim($str1,'s'); //right thake remove kore
//$str1 = ltrim($str1,'s'); //le thake remove kore
$str2 = " world";

echo($str1.$str2);

 ?>