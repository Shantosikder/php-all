<?php 

session_start();

echo "Your session identification number is: ".session_id();

$_SESSION['name'] = 'Shanto';
$_SESSION['Phone']='01799541685';

echo("<pre>");

print_r($_SESSION);

$encode = session_encode();

echo $encode;

?>

<a href="about.php">About US</a>