
<?php include('db_config.php'); ?>

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
	<title>student show form</title>
</head>
<body>

	<h2>Student List:</h2>

	<?php 	

	$sql = "SELECT * FROM Students ";
	$data = $db->query($sql);

	 ?>
	 <table class="table table script">
	 	<tr>
	 		<th>ID</th>
	 		<th>Name</th>
	 		<th>Email</th>
	 		<th>Phone</th>
	 		<th>Gender</th>
	 		<th>Action</th>
	 	</tr>

	 	<?php 	
	 	while($row = $data->fetch_object()){ ?>

	 		<tr>
	 			<td> <?php 	echo $row->id; ?> </td>
	 			<td> <?php 	echo $row->name; ?> </td>
	 			<td> <?php 	echo $row->email; ?> </td>
	 			<td> <?php 	echo $row->phone; ?> </td>
	 			<td> <?php 	echo $row->gender; ?> </td>

	 			<td>

	 				<a class="btn btn-info" href="Editfile.php?showidnumber=<?php echo $row->id; ?> ">Edit</a>

	 				<a class="btn btn-danger" href="delete.php?showidnumber=<?php echo $row->id; ?> ">Delete</a>

	 			</td>
	 		</tr>

	 	<?php } ?>

	 </table>
	 <br>

	 <a class="btn btn-success btn-block" href="EntryData.php">New Entry</a>

</body>
</html>