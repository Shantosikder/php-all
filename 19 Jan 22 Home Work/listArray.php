<?php 

// $name = array("Shanto","Nabil","Mosharof","amzad","Sourov");

// list($nm1,$nm2,$nm3,$nm4,$nm5)=$name;

// echo $nm3;

// echo "<br>";

?>


<?php 

function info(){
$data = array();

$data[]="Shanto Sikdr";
$data[]="23";
$data[]="Mirpur-6";
$data[]="Madaripur";

return $data;
}

list($a,$b,$c,$d)=info();

echo"My Name is: $a <br>";
echo"My Age is: $b <br>";
echo"My Location is: $c <br>";
echo"My Home District is: $d <br>";

//Function List

?>