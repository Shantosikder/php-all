<?php 

ini_set('display_errors', 'off');
try{
    $fh  = fopen("contact.txt","r");
    if(! $fh){

        throw new Exception("Error khaico");

    }
}catch(Exception $e){

    echo $e->getfile()." message ".$e->getmessage()." Line ".$e->getline();

}









?>