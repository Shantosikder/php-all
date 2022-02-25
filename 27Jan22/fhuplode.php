<?php 


echo "<pre>";

print_r($_POST);

print_r($_FILES);


// echo $_FILES['homework']['name'];
// echo("<br>");
// echo $_FILES['homework']['type'];
// echo("<br>");
// echo $_FILES['homework']['tmp_name'];
// echo("<br>");
// echo $_FILES['homework']['size'];
// echo("<br>");
// echo $_FILES['homework']['error'];


//folder a file uploade
$name = $_FILES['homework']['name'];
 echo "<br>";
 $temp = $_FILES['homework']['tmp_name'];

 move_uploaded_file($temp, 'uploads/'.$name);









 ?>