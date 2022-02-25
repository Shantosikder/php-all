<?php 

$citys = [
"Dhaka"=>array("Population"=>20000, "Education"=>95),
"Madaripur"=>array("Population"=>30000, "Education"=>75),
"Sylhet"=>array("Population"=>50000, "Education"=>55),
"B Bariaya"=>array("Population"=>20000, "Education"=>45),
"Bogur"=>array("Population"=>70000, "Education"=>35),
"MJ"=>array("Population"=>90000, "Education"=>65),
];



echo "Education: ". $citys['Madaripur']['Education']."%";
echo "<br>Population: ". $citys['Sylhet']['Population']."%";
echo "<br>Education: ". $citys['Bogur']['Education']."%";









?>