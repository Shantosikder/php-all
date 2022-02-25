<?php 

$file = 'myTime.txt'; //akta file auto open kore

$fh = fopen($file,'a+'); //refresh dile ai contant barbe
//$fh = fopen($file,'a'); //apend mode
//$fh = fopen($file,'w'); //write mode 
//$fh = fopen($file,'r'); //read mode

echo file_get_contents($file);

fwrite($fh, "\n whateever string shanto");



 ?>