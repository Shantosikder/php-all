<?php 

// function show(){
//     echo "Normal Function ";
// }
// show();

echo "<br>";

//Anonymous Function 

// $a = function (){
//     echo "Anonymous Function ";
// };

// $a();


//Anonymous Function 


echo "<br>";

// $a = function ($p){
//     echo "Anonymous Function $p";
// };

// $a(23);

echo "<br>";

//Anonymous Function With global Variable


// $y = 40; //Global Variable

// $a = function ($p){
//     echo "Anonymous Function $p";
// };

// $a($y);

echo "<br>";

//Anonymous Function With global Variable & use 

$r = 200; //Global Variable
$y = 500; //Global Variable

$a = function($p) use ($r){
    echo "Anonymous Function $p $r";
};

$a($y);


?>