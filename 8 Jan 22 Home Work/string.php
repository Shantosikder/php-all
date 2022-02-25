<?php 

$str = "Hello world , How are you";

echo strlen($str);

echo "<br>";

echo str_word_count($str);

echo "<br>";

echo strrev($str);

echo "<br>";

echo strpos($str,"How"); //jei value ta dibo oita projonto count korbe.

$name = "Shanto Sikder";

$output = str_replace("world",$name,$str);

echo "  Replace Output: ". $output;

?>