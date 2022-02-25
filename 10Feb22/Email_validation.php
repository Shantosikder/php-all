<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Email Validation</title>

</head>
<body>

	<?php 	

	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		if($_POST['email']=='' && $_POST['Password']==''){
			echo("Email and password must fill up");
		}else{
			$email = $_POST['email'];
			$Password = $_POST['Password'];
			$errors = array();
			if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
				$errors[]="Valid email must be required";
			}
			if(strlen($Password)<5 || strlen($Password)>10){
				$errors[]="password length must be 5 to 10";
			}

			if(empty($errors)){
				echo("All data are Validate");
			}else{
				foreach($errors as $err){
					echo($err."<br>");
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
  	<input type="text" name="Password" placeholder=" Enter your Password">
  	<br>
  	<br>
  	<input type="submit" name="Submit" value="SUBMIT">
</form>

</body>
</html>