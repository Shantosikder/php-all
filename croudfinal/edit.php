<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Form</title>
</head>
<body>

	<?php 

	if($_SERVER['REQUEST_METHOD']=='POST'){

		include_once('db_config.php');
		extract($_POST);

		$sql = "UPDATE studentcroud SET name = '$name', email = '$email', phone = '$phone', gender = '$gender' WHERE id = '$idshow'";

		$db->query($sql);
		if($db->affected_rows>0){
			echo "<b><u>Updated</u></b>";
		}
	}


	 ?>


	 <?php 

	 $id = $_REQUEST['idshow'];

	 include_once("db_config.php");

	 $sql = "SELECT * FROM studentcroud WHERE id = '$id'";
	 $data = $db->query($sql);
	 $row = $data->fetch_object();


	  ?>




	<form action="" method="post">
		<h1>Show All data:</h1>
		<label>Name:</label>
		<input type="text" name="name" value=" <?php echo $row->name; ?> "><br><br>
		<label>Email:</label>
		<input type="text" name="email" value=" <?php echo $row->email; ?> "><br><br>
		<label>Phone:</label>
		<input type="text" name="phone" value=" <?php echo $row->phone; ?> "><br><br>
		<label>Gender:</label><br>
		<label>Male:</label>
		<input type="radio" name="gender"  <?php if($row->gender=='Male') echo("checked"); ?>  value="Male" ><br>
		<label>Female:</label>
		<input type="radio" name="gender"  <?php if($row->gender=='Female') echo("checked"); ?>  value="Female" >

		<br>
		<br>

		<input type="hidden" name="idshow" value=" <?php echo $row->id; ?> ">
		<input type="submit" name="submit" value="Update">
	</form>


	<br>
	<br>

	<a href="showlist.php">Show all Info</a>
	
</body>
</html>