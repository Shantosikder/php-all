<?php 


//$_COOKIE['day'] = 'Wednesday';

session_start();

$user = $_SESSION['username'] = 'Shanto';

setcookie('user', $user, time() + 50);

print_r($_COOKIE);



 ?>