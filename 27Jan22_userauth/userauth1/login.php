<?php 

if(! isset($_SERVER['PHP_AUTH_USER']) || ! isset($_SERVER['PHP_AUTH_PW'])){

	header('www.Authenticate: Basic Realm="Authentication"');
	header("HTTP/1.1 401 Unauthorized");
}else{
	echo("Your supplied username: {$_SERVER['PHP_AUTH_USER']}<br />");
	echo("Your password: {$_SERVER['PHP_AUTH_PW']}<br />");
}

?>



<?php 
echo sha1("admin"); //password encrypeted kore


$secret = 'd033e22ae348aeb5660fc2140aec35850c4da997';
if (($_SERVER['PHP_AUTH_USER'] != 'admin') ||
 (hash('sha1', $_SERVER['PHP_AUTH_PW']) != $secret)) {
 header('WWW-Authenticate: Basic Realm="Secret Stash"');
 header('HTTP/1.0 401 Unauthorized');
 print('You must provide the proper credentials!');
 exit;
}

 ?>



 










