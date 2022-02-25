<?php 

// $file = 'freadTxt.txt';

// $fh = fopen($file, 'r');

// $output = fread($fh, 100);

// echo $output;

//size joto tuk dibo oi tuk asbe

 ?>




 <?php 

$file = 'freadTxt.txt';

$fh = fopen($file, 'r');

$size = filesize($file);

$output = fread($fh, $size);

echo $output;

fclose($fh);

//full file size ta asbe
  ?>