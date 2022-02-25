<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>show list</title>
</head>
<body>

	<h1>Data List:</h1>

<?php 

include_once("db_config.php");

$sql = "SELECT * FROM studentcroud";

$data = $db->query($sql);

 ?>


 <table border="1" style="border-collapse: collapse; width: 800px; height:150px; ">
 	<tr>
 		<th>ID</th>
 		<th>Name</th>
 		<th>Email</th>
 		<th>Phone</th>
 		<th>Gender</th>
 		<th>Action</th>
 	</tr>



 	<?php 
   

   while ($row = $data->fetch_object()){   ?>


   	<tr>
   		<td> <?php echo $row->id; ?> </td>
   		<td> <?php echo $row->name; ?> </td>
   		<td> <?php echo $row->email; ?> </td>
   		<td> <?php echo $row->phone; ?> </td>
   		<td> <?php echo $row->gender; ?> </td>


   		<td>
   			
   			<a href="edit.php?idshow=<?php echo $row->id; ?>">Edit</a>
   			<a href="delete.php?idshow=<?php echo $row->id; ?>">Delete</a>
   			
   		</td>
   	</tr>
       
  <?php } ?>

 	
 </table><br><br>

 <a href="entry.php">New Entry</a>
	
</body>
</html>