<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Form</title>
</head>
<body>

	<?php 

	include("db_config.php");

	if(isset($_POST['submit'])){

		$username = $_POST['name'];
		$email = mysqli_real_escape_string($db,$_POST['email']);
		$password = $_POST['password'];

		$sql = "SELECT * FROM user WHERE username = '{$username}' AND password = '{$password}' AND email = '{$email}'";

		$result = mysqli_query($db,$sql);

		if(mysqli_num_rows($result)>0){

			while  ($row = mysqli_fetch_assoc($result)) {

				session_start();

				$_SESSION['username']=$row['username'];
				$_SESSION['email']=$row['email'];
				$_SESSION['password']=$row['password'];

				header("Location: dashbord.php");
			    
			}

		}else{
				echo("<b>Invalid User</b>");
			}
	}
	


	 ?>


	<form action="" method="POST">
		<h2>Login | Form:</h2>

		<label>UserName:</label>
		<input type="text" name="name" placeholder="Enter your UserName"><br><br>

		<label>Email:</label>
		<input type="text" name="email" placeholder="Enter your Email"><br><br>

		<label>Password:</label>
		<input type="password" name="password" placeholder="Enter your password"><br><br>

		<input type="submit" name="submit" value="SUBMIT">
	</form>
	
</body>
</html>