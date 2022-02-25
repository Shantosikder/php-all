<?php include('db_config.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form Table</title>
</head>
<body>

<h1>Student List:</h1>

<?php 

$sql = "SELECT * FROM students";
$data = $db->query($sql);


?>


<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Gender</th>

    </tr> 
    <?php while($row = $data->fetch_object()){ ?>

        <tr>
            <td> <?php echo $row->id; ?> </td>
            <td> <?php echo $row->name; ?> </td>
            <td> <?php echo $row->email; ?> </td>
            <td> <?php echo $row->phone; ?> </td>
            <td> <?php echo $row->gender; ?> </td>
        
            <td>
                Edit |
                <a href="delete.php?id=<?php echo $row->id; ?>">
            Delete</a>
            </td>
        </tr>

   <?php } ?>

</table>
<br><br>

<a href="Entrydata.php">New Entry Data</a>
    
</body>
</html>