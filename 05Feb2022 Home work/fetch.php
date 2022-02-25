<?php include 'db_config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
		$sql = "SELECT * FROM idbstudentinfo";

		$data = $db->query($sql);
		echo "<pre>";
		print_r($data);

		echo "<h1>fetch_array() funtion implement as an array data</h1>";
		$row = $data->fetch_array();
		print_r($row);
		echo "<hr><br><br>";

		echo "<h1>fetch_assoc() funtion implement as an array data</h1>";
		$row = $data->fetch_assoc();
		print_r($row);
		echo "<hr><br><br>";

		echo "<h1>fetch_object() funtion implement as an array data</h1>";
		$row = $data->fetch_object();
		print_r($row);
		echo "<hr><br><br>";
	 ?>
</body>
</html>