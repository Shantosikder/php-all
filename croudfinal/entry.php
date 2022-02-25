<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Entry Form</title>
</head>
<body> 
	<?php 

	if($_SERVER['REQUEST_METHOD']=='POST'){

		include_once("db_config.php");

		extract($_POST);

		$sql = "INSERT INTO studentcroud VALUES(NULL,'$name','$email','$phone','$gender')";


		$db->query($sql);

		if($db->affected_rows){
			echo("<b>Save Successfull</b>");
		}
	}

	 ?>


	<form action="" method="post">
		<h1>Entry Form:</h1>
		<label>Name</label>
		<input type="text" name="name" placeholder="Entry your Name"><br><br>
		<label>Email:</label>
		<input type="text" name="email" placeholder="Entry your Email"><br><br>
		<label>Phone:</label>
		<input type="text" name="phone" placeholder="Entry your Phone">
		<br>
		<br>
		<label>Gender:</label><br>
		Male: <input type="radio" name="gender" value="Male"><br>
		Female: <input type="radio" name="gender" value="Female"><br><br>

		<input type="submit" name="submit" value="Save"><br>

	</form>
	<br>
	<br>
	<a href="showlist.php">Show Table Data</a>
</body>
</html>