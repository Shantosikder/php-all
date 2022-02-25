<?php 


$file = "myTime.txt";

ini_set('date.timezone', 'Asia/Dhaka'); //amder deah ar time dekhar jonno

echo fileatime($file);

$timestamp = fileatime($file);
$timestamp = filectime($file);
$timestamp = filemtime($file);


echo date('h:m:s', $timestamp);







?>