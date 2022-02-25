<?php 

// $n = 10;
// $status = 0;
// for($i=2;$i<$n; $i++){
// 	if($n%$i==0){
// 		$status=1;
// 		break;
// 	}
// }

// if($status==1){
// 	echo "$n is not prime number";
// }else{
// 	echo "$n is a prime number";
// }

 ?>


<?php
function checkPrime($num)
{
   if ($num == 1)
   return 0;
   for ($i = 2; $i <= $num/2; $i++)
   {
      if ($num % $i == 0)
      return 0;
   }
   return 1;
}

echo '<h2>Prime Numbers between 1 and 100</h2> ';
for($num = 1; $num <= 100; $num++) {
	$flag = checkPrime($num);
	if ($flag == 1) {
		echo $num." ";
	}	
}  
?>

