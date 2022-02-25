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
	<div class="container">
	
	<h1>Student Edit Form:</h1>

	<?php 

	//print_r($_POST);

	if($_SERVER['REQUEST_METHOD']=='POST'){

		include_once('db_config.php');
		extract($_POST);

		$sql = "UPDATE students SET name = '$name', email = '$email', phone = '$phone', gender = '$gender' WHERE id = '$showidnumber'";

		$db->query($sql);
		if($db->affected_rows>0){
			echo "Updated";
		}
	}

	 ?>

	 <?php 
	 	$id = $_REQUEST['showidnumber'];
	 	include_once('db_config.php');

	 	$sql = "SELECT * FROM students WHERE id = '$id'";
	 	$data = $db->query($sql);
	 	$row = $data->fetch_object();


	 ?>



<form method="post">
<div class="form-group">
      <label for="name">Name:</label>
		<br>
		<input type="text" class="form-control" name="name" value="<?php echo $row->name; ?>"><br>
		<label for="name">Email:</label><br>
		<input type="text" class="form-control" name="email" value="<?php echo $row->email; ?>"><br>
		<label for="name">Phone:</label><br>
		<input type="text" class="form-control" name="phone" value="<?php echo $row->phone; ?>"><br>
		
        
        <div class="checkbox">
        <label for="gender">Gender:</label><br>
        
      <label>Male:</label>
		
        <input type="radio" name="gender" <?php if($row->gender=='Male') echo "checked"; ?> value="Male">
		<label>Female:</label>
        <input type="radio" name="gender" <?php if($row->gender=='Male') echo "checked"; ?> value="Female">
        </label>
       </div>
		<br>
		<br>
        
        <input type="hidden"  name="showidnumber" value="<?php echo $row->id; ?>" >
		<input type="submit" name="submit" value="UPDATE" class="btn btn-default">
        
		
	</form>




	<br><br>
	<a class="btn btn-info btn-block" href="Students_dataShow.php">Show all Students Data </a>



</body>
</html>