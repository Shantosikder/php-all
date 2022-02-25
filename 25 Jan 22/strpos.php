<?php 

$mystring = 'shanto sikder sikder sikder';

$findme   = 'sikder';

//$pos = strpos($mystring, $findme); //frist je value ta dibe 
$pos = strrpos($mystring, $findme); //last ta ante chaile strrpos

echo($pos);


 ?>