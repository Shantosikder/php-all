<?php 

$customers[] = array("shanto sikder","shantosikder77@gmail.com","01799541685");
$customers[] = array("Nabil Rahman","shantosikder77@gmail.com","01799541685");
$customers[] = array("Mosharof Parvaj","shantosikder77@gmail.com","01799541685");
$customers[] = array("Amzad Hossain","shantosikder77@gmail.com","01799541685");
$customers[] = array("Siam ahmed","shantosikder77@gmail.com","01799541685");
$customers[] = array("sourov hossin","shantosikder77@gmail.com","01799541685");
$customers[] = array("khalid","shantosikder77@gmail.com","01799541685");
$customers[] = array("Rifat","shantosikder77@gmail.com","01799541685");
$customers[] = array("Riaz","shantosikder77@gmail.com","01799541685");
$customers[] = array("shohel vai","shantosikder77@gmail.com","01799541685");

echo "<pre>";

echo "<h2>Foreach loop:</h2>";

// foreach($customers as $customer){
//     echo "\n";
//     foreach($customer as $value){
//         echo $value."\n";
//     }
// }




echo "<h2>For loop:</h2>";

// for($i=1; $i<count($customers); $i++){
//     print_r($customers[$i]);
// }



echo "<h2>vprintf:</h2>";

foreach($customers as $customer){
    vprintf("<p>Name: %s<br>Email: %s<br>Phone: %s<p/>",$customer);
}





?>