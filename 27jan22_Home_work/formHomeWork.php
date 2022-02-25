<?php 

if(isset($_FILES['docx'])){

    echo "<pre>";

    print_r($_FILES);
}

$file_name = $_FILES['docx']['name'];
echo "<br>";
$file_size = $_FILES['docx']['size'];
echo "<br>";
$file_tmp  = $_FILES['docx']['tmp_name'];

if(move_uploaded_file($file_tmp, 'fileUplode/'.$file_name)){
    echo "uplode successful";

}else{
    echo "Could noi uplode file";
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Uplode Handaling</title>
</head>
<body>

    <form action="" method="POST" enctype="multipart/form-data">

        <input type="file" name="docx">
        <br>
        <br>
        <input type="submit" value="uplode">
    </form>
    
</body>
</html>

