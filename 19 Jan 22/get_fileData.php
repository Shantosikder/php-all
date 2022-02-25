<?php 

$datas = file('getText.txt');

echo "<pre>";

//print_r($datas);

foreach($datas as $data){

    $array = explode("|", $data);
}

print_r($array);



 ?>