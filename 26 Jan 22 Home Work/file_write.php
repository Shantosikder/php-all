<?php 

$file = 'fwrite.txt';

$fh = fopen($file , 'a+'); //refresh dile ai contant barbe
// $fh = fopen($file, 'a'); //apen mode 
// $fh = fopen($file, 'w'); //write mode
// $fh = fopen($file, 'r'); //read mode


echo file_get_contents($file);

fwrite($fh, "\nsomthing text file");








?>