<?php 


$drive = "D:/";

$byte = diskfreespace($drive);
$kb = $byte/1024;
$mb = $kb/1024;
//echo $gb = $mb/1024; //file freespace dekha jai 
echo $gb = round($mb/1024); //file freespace dekha jai 




 ?>