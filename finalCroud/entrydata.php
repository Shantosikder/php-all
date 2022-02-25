<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>Entry data </title>
</head>
<body>


	<?php 

	if($_SERVER['REQUEST_METHOD']=='POST'){
		include("db_config.php");

		extract($_POST);

		$sql = "INSERT INTO slist VALUES(NULL,'$name','$email','$phone','$gender')";

		$db->query($sql);

		if($db->affected_rows){
			echo"Save Successful";
		}
	}


	 ?>
<div class="container">
	
<form action="" method="post" >
<div class="form-group">
		
		<h1>Entry Form:</h1>

		<label>Name:</label>
		<input class="form-control" type="text" name="name" placeholder="Enter your Name"><br><br>
		<label>Email:</label>
		<input class="form-control" type="text" name="email" placeholder="Enter your Email"><br><br>
		<label>Phone:</label>
		<input class="form-control" type="text" name="phone" placeholder="Enter your Phone"><br><br>
		<label>Gender:</label><br>
		<div class="checkbox">
			<label>Male:</label>
		<input  type="radio" name="gender" value="Male"><br>
		<label>Female:</label>
		<input type="radio" name="gender" value="Female">
		</div>
		
		<br>
		<br>
		<input class="btn btn-success"  type="submit" name="Submit" value="Save">

	</form><br><br>
</div>
<a class="btn btn-info btn-block" href="studentListShow.php">Show Table</a>

</div>
	
	
</body>
</html>