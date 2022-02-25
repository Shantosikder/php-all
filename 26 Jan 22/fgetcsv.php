<?php 

$file = 'fget_list.txt';

$fh = fopen($file, 'r');

while($datas = fgetcsv($fh, ',')){
	for($i=0; $i<count($datas); $i++){
		echo $datas[$i];
		echo " | ";
	}
	echo "<hr>";
}




// while(list($name, $email, $phone) = fgetcsv($fh,',')){

// 	echo "<hr>";

// 	echo $name.$email.$phone;

// }





// foreach($data as $value){
// 	print_r($value);
// 	echo("<hr>");
// }

//var_dump($data);



 ?>