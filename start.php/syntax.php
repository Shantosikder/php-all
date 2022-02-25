<?php

// $shanto = 50;
// $txt = "Shanto sikder";
// echo  "$shanto <br>";
// echo $txt;

$Age = 23;

$name = "Sikder";

echo "Name: "."Shanto Sikder"."<br>";

echo "Age: ".$Age."<br>";

echo "Name: "."Shanto"." ".$name."<br>";

//comments is 1 line comments in php.

#comments system single line.

/* Its a multiline comments 
in php.
*/

$number = 10+/*300*/20; //comments system.
echo "pluse: ". $number."<br>"; 

$un = "BUBT";
echo "Shanto in a ".$un. " Student". " at Rupnogor"."<br>";

$a= 500;
$b = 1000;
ECHO "Total Tk :".$a+$b."<br>";

//$t = 300;



function test() {
    $taka = 4000;
   echo "Ftaka:".$taka;
}
//echo $taka;

function myTest() {
    $x = 5; // local scope
    //echo "<p>Variable x inside function is: $x</p>";
    echo $x."<br>";
  } 
 $s = "Name: "."Shanto sikder"." ";
 $q = "Romjanpur kalkini, Madaripur"."<br>";

 echo $s;
 echo $q; //string data type

 $i = 20211203048;
 echo var_dump($i); //Integer

 $f = 200.400;
 echo var_dump($f); //Float

 $b = true;
 $bb = false;

 echo var_dump($b); 

 $car = array("Tayta","BMW","Mazda","Jago");

 echo "<br>";

 var_dump($car); //Array 

 echo "<br>";

 $n = "Shanto";
 $n = null;
 var_dump($n); //NULL Value

 echo "<br>";
 echo "<br>";
 echo "Public Functon:"."<br>";

 class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car ("green","BMW");
echo $myCar ->   message();
echo "<br>";
$myCar = new Car ("Black","Toyta");
echo $myCar -> message();

echo "<br>";
echo "<br>"; 

#function

echo strlen("Shanto Sikder"); //strlen() - Return the Length of a String

echo "<br>"; 

echo str_word_count("Shanto sikder"); //str_word_count() - Count Words in a String

echo "<br>";

echo strrev("shanto sikder"); //strrev() - Reverse a String

echo "<br>";

echo strpos("shanto sikder Romjanpur", "sikder"); //character position of the first match. 

echo "<br>";

echo str_replace("luda","sikder", "Hi luda"); //str_replace() - Replace Text Within a String

echo "<br>";
echo "<br>";

echo "Number :.<br>";

$N = 4646;
echo var_dump(is_int($N));
$num = 50.500;
echo var_dump(is_int($num));

echo "<br>";

$F = 300.700;
echo var_dump(is_float($F));

echo "<br>";

$inf = 1.0e444;
echo var_dump($inf);






?>