<?php 

$prime = array(1, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47,53, 59, 61, 67, 71, 73, 79, 83, 89, 97);

for($i=1; $i++; $i<1000){
    $random = rand(1,50);

    if(in_array($random, $prime)){
        echo " {$random}, This is the number we found form the list ";
        break;
    }else{
        echo " {$random}, is Not a prime Number <br>";
    }
}












?>