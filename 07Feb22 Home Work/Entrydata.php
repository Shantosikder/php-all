<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php curd Evidance</title>
</head>
<body>

<?php 

if($_SERVER['REQUEST_METHOD']=='POST'){
    include('db_config.php');
    extract($_POST);
    

    $sql = "INSERT INTO students VALUE(NULL,'$name','$email','$phone','$gender')";
    $db->query($sql);
    echo $db->affected_rows;
   
}

?>

<h2>Student Entry Form:</h2>
<form action="" method="POST">
    <label for="">Name:</label><br>
    <input type="text" name="name"><br>
    <label for="">Email:</label><br>
    <input type="text" name="email"><br>
    <label for="">Phone:</label><br>
    <input type="text" name="phone"><br>
    <label for="">Gender:</label>
    Male: <input type="radio" name="gender" value="Male">
    Female: <input type="radio" name="gender" value="Female">
    <br>
    <br>
    <input type="submit" name="submit" value="Save">
   
</form>
<br><br>

<a href="studentDataShow.php">Show All Student Data</a>
    
</body>
</html>