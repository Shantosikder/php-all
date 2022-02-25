<?php 

$drive = "c:/";

$byte = disk_free_space($drive);

echo $gb = round($byte/1024/1024/1024);



//c drive a total space
?>