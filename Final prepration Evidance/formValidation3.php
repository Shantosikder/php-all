<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>
    

<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){

   if($_POST['email'] && $_POST['password']==''){
       echo "Email password must be repuired";
   }else{
       $email = $_POST['email'];
       $password = $_POST['password'];
       $errors = array();
       if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
           $errors[]="Valid email be required ";
       }
       if(strlen($password)<5 || strlen($password)>8){
           $errors[]="Password must be 5 to 8 chr";
       }
       if(empty($errors)){
           echo "all data validation";
       }else{
           foreach($errors as $error){
               echo $error."<br>";
           }
       }
   }
}





?>













<form method="POST">

	<h1>Email Validation</h1>
  	<label>Email:</label>
  	<input type="text" name="email" placeholder="Enter your email">
  	<br>
  	<br>
  	<label>Password:</label>
  	<input type="text" name="password" placeholder=" Enter your Password">
  	<br>
  	<br>
  	<input type="submit" name="Submit" value="SUBMIT">
</form>
</body>
</html>