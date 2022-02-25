<?php 
	
	$a = 84;
	$b = 86; 
	$c = 85;

	if($a > $b && $a > $c){
		// echo "The largest number is " . $a;
		printf("The largest number is %d", $a);
	} elseif ($b > $a && $b > $c) {
		// echo "The largest number is " . $b;
		printf("The largest number is %d", $b);
	} elseif($c > $a && $c > $b) {
		// echo "The largest number is " . $c;
		printf("The largest number is %d", $c);
	}else {
		echo "All are equall number";
	}


 ?>