<?php 

$file = 'fread.txt';

$fh = fopen($file, 'r');

$size = filesize($file);

$output = fread($fh, $size);
//$output = fread($fh, 100); //je size dibo tai asbe


echo $output;

fclose($fh);

//full file size ta asbe

?>