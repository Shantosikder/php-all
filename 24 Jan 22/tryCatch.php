<?php 

//fopen("contacts.txt", "r"); //Error check 


ini_set('display_errors', 'off');

try{
	$fh = fopen("contacts.txt","r");
	if(! $fh){
		throw new Exception("Error Processing Request");
		
	}
}catch (Exception $e){
	echo "Error (File: ".$e->getfile().", line".$e->getline()."): ".$e->getmessage();
}

//Error handaling 
 ?>