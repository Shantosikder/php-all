<?php 

$drive = "D:/";

$total = disk_total_space($drive);
$free  = diskfreespace($drive);

$byte = $total-$free;

$kb = $byte/1024;
$mb = $kb/1024;

echo $gb = ($mb/1024);
//echo $gb = round($mb/1024);


 ?>