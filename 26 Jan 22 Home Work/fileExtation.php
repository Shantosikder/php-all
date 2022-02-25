<?php 

$email = "shantosikder77@gmail.com"; // Variable to check

// Validate email

if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo("$email is a valid email address");
}else{
    echo("$email is not a valid email address");
}


?>