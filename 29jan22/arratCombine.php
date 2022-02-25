<?php 

$abbreviations = array("MD", "KH", "NO", "BG");

$cities = array("Madaripur", "Khulna", "Noakhali", "Bogura");

$cityarea = array_combine($abbreviations,$cities);

echo "<pre>";

print_r($cityarea);

//array te vlaue gula combine kore
 ?>