<?php

$id = $_GET['showidnumber'];

include('db_config.php');

$sql = "DELETE FROM slist WHERE id = '$id'";
$db->query($sql);
if($db->affected_rows>0){
    header("Location: studentDataShow.php");
}



?>