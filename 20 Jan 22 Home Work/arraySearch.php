<?php 



// $name = array("shanto sikder","Rana","Waliul","MIzan","Al amin");

// //echo in_array('shanto sikder',$name);

// if (in_array('shanto sikder',$name)){
//     echo "Find successfully";
// }else{
//     echo"Can't Find";
// }

//index Array

//output 0/1 array sarch paile 1 naile 0


$name = array("shanto sikder"=>"Madaripur","Rana"=>"Kuril","Waliul"=>"Badda","MIzan"=>"sawrapara","Al amin"=>"Nabisco");

$result = array_search('Madaripur',$name);

echo "we found madaripur districst in $result";

//Associtive Array


?>