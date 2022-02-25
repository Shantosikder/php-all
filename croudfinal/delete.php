<?php 

$id = $_GET['idshow'];

include_once("db_config.php");

$sql = "DELETE FROM studentcroud WHERE id = '$id'";

$db->query($sql);

if($db->affected_rows>0){
    header("Location: showlist.php");
}


 ?>