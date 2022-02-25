<?PHP 

//$_COOKIE['day'] = 'wednesday';

session_start();

$user = $_SESSION['username'] = 'shanto';

setcookie('user',$user, time() + 50);

print_r($_COOKIE);



?>