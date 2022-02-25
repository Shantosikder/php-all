<?php 

$drive = "C:/";

$byte = disk_free_space($drive);

$kb = $byte/1024;
$mb = $kb/1024;

echo $gb = round($mb/1024);


//drive ar space dekha jai 
?>