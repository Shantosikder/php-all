<?php 

$file = 'fget_list.txt';

$fh = fopen($file, 'r');

while(!feof($fh)){
	//echo ("<pre>");
	echo fgets($fh);
}

 ?>