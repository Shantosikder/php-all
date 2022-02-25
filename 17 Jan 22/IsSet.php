<?php 


//$x = false;
//$x = Null;

$x = 500;

unset($x);

if(isset($x)){
	echo "Yes".'$x'."is SET";
} else {
	echo "Not set";
}

 ?>