<?php 

$drive = "C:/";

$byte = disk_total_space($drive);
echo $gb = round($byte/1024/1024/1024);

//$mb = $kb/1024;
//echo $gb  = $mb/1024;



 ?>