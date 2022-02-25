<?php 

$file = 'myTime.txt';

$fh = fopen($file, 'r');

// print_r($fh);

// echo fgets($fh);


while(!feof($fh)){

		echo fgets($fh);

		echo "<br>";
}

fclose($fh);



 ?>