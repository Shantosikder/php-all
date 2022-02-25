<?php 

$a = 3000;

$b = 4000;

$c = 5000;

if($a>$b && $a>$c){
    echo $a;
}else{
    if($b>$a && $b>$c){
        echo $b;
    }else{
        echo("Large Number is : ".$c);
    }
}


//print large Number
?>