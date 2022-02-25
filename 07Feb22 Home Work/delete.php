<?php 

$id = $_GET['id'];
include 'db_config.php';

$sql = "DELETE FROM students WHERE id = '$id'";

$db->query($sql);
if($db->affected_rows>0){
    header("Location: studentDataShow.php");
    echo "Delete Successful";
}





?>