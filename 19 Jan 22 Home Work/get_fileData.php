<?php 

$datas = file('getText.txt');

echo "<pre>";

foreach($datas as $data){
    $aaray = explode('|',$data);
}

print_r($aaray);


?>