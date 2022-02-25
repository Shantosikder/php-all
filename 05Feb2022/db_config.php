<?php 


	define('Host', 'localhost');
	define('USER', 'root');
	define('PASS', '');
	define('DB', 'hometest');

	// echo "<pre>";

	$db = @new mysqli(Host, USER, PASS, DB);

	//echo $db->connect_errno;

	if($db->connect_errno>0){
		echo $db->connect_errno;
		echo "<br>"; 

	}


    // $host = 'localhost';
	// $user = 'root';
	// $pass = '';
	// $db = 'hometest';


	// $db = @new mysqli(Host, USR, PASS, DB);

		// if($db->connect_errno>0){
	// 	echo $db->connect_errno;
	// 	echo "<br>"; 


	// }


	
	// echo $db->connect_errno;

	// echo $db->connect_error;

	// echo "Hello World";




?>