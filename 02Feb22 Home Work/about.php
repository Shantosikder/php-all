<?php 

session_start();

echo("<pre>");

print_r($_SESSION);

unset($_SESSION['Phone']); //data remove kore unset

?>