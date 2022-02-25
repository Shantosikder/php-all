<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Validation</title>
</head>
<body>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($_POST['email'] =='' && $_POST['password'] ==''){
        echo ("<b>Email and password must fill up</b>");
    }else{
        $email = $_POST['email'];
        $password = $_POST['password'];
        $errors = array();   
        if(filter_var($email, FILTER_VALIDATE_EMAIL)== false){
            $errors[]="<b>valid email must be required</b>";
        }
        if(strlen($password)<5 || strlen($password)>8){
            $errors[]="<b>Password Length Must be 5 to 8</b>";
        }
        if(empty($errors)){
            echo("<b>All data validate------</b>");
        }else{
            foreach($errors as $err){
                echo ($err."<br>");
            }
        }
    }

}

?>


<form action="" method="POST">
    <h1>Form | Validation:</h1>
    <label for="">Email:</label>
    <input type="text" name="email" placeholder="Enter your Email">
    <br>
    <br>
    <label for="">Password:</label>
    <input type="text" name="password" placeholder="Enter your Password">
    <br>
    <br>
    <input type="submit" name="submit" value="SUBMIT">
</form>

    
</body>
</html>