<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pwad50-php-crud";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$stmt = $conn->prepare("INSERT INTO students (id,email, phone, gender) VALUES (?, ?, ?,?)");
$stmt->bind_param("ssss", $id, $email, $phone, $gender);


$id = '01';
$email = 'shantosikder77@gmail.com';
$phone = '01799541685';
$gender = 'Male';
$stmt->execute();


$id = '02';
$email = 'shantosikder77@gmail.com';
$phone = '01799541685';
$gender = 'Male';
$stmt->execute();

$id = '03';
$email = 'shantosikder77@gmail.com';
$phone = '01799541685';
$gender = 'Male';
$stmt->execute();


echo "New records created successfully";


$stmt->close();
$conn->close();
?>