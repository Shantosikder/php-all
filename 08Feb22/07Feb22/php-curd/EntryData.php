<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>PHP CRUD Evidance</title>
</head>
<body>

	<?php 

	//print_r($_POST);

	if($_SERVER['REQUEST_METHOD']=='POST'){

		include('db_config.php');
		extract($_POST);

		$sql = "INSERT INTO students VALUES(NULL,'$name','$email','$phone','$gender')";

		$db->query($sql);

		echo $db->affected_rows;
	}

	 ?>

<!-- 	<h1>Student Entry Form:</h1>
	<form method="post">
		Name:<br>
		<input type="text" name="name"><br>
		Email:<br>
		<input type="text" name="email"><br>
		phone:<br>
		<input type="text" name="phone"><br>
		Gender:<br>
		Male:<input type="radio" name="gender" value="Male">
		Female:<input type="radio" name="gender" value="Female">
		<br>
		<br>
		<input type="submit" name="submit" value="SAVE">
	</form> -->


	<div class="container">
		<h1>Student Entry Form:</h1>

<form method="post">
<div class="form-group">
      <label for="name">Name:</label>
		<br>
		<input type="text" class="form-control" name="name"><br>
		<label for="name">Email:</label><br>
		<input type="text" class="form-control" name="email"><br>
		<label for="name">Phone:</label><br>
		<input type="text" class="form-control" name="phone"><br>
		
        <label>Gender:</label>
        <div class="checkbox">
        
        
      <label>Male:</label>
		
        <input type="radio" name="gender" value="Male">
		<label>Female:</label>
        <input type="radio" name="gender" value="Female">
        </label>
       </div>
		<br>
		<br>
		<input type="submit" name="submit" value="SAVE" class="btn btn-info">
	</form>


</div>
	<br><br>
	<a class="btn btn-success btn-block" href="Students_dataShow.php">Show all Students Data </a>

</body>
</html>