<?php 

	$file = 'myTime.txt';

	ini_set('date.timezone', 'Asia/Dhaka'); //amder deah ar time dekhar jonno

	//echo fileatime($file);


	$timestamp = fileatime($file); //Access time
	//$timestamp = filectime($file); //Create time
	//$timestamp = filemtime($file); //modify time

	echo date('h:m:s', $timestamp);


 ?>