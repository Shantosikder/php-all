<?php 

$states = array("Alabama", "Alaska", "Arizona", "Arkansas",
 "California", "Connecticut");


$subset = array_splice($states, 2, -2, array("New York", "Florida"));

echo "<pre>";

print_r($states);



//add kore remove o kore
 ?>