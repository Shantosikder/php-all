<?php 


function testing(&$string){
    $string .= " and somthing extra";
}

$str = "This is a string ";

testing($str);

echo $str;


echo "<br>";
echo "<h2>Function Refrence :</h2>";
echo "<br>";



function first($num){
    $num += 5;
}

function second(&$num){
    $num += 7;
}

$number = 10;

first($number);
echo "Original value is $number<br>";

second($number);
echo "Original value is $number<br>";









?>