<?php 

define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB','hometest');

$db =new mysqli(HOST,USER,PASS,DB);

if($db->connect_errno>0){
    echo $bd->connect_errno;
    echo "<br>";
}







?>