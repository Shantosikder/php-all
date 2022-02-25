<?php
   if(isset($_FILES['myfile'])){
      $errors= array();
      $file_name = $_FILES['myfile']['name'];
      $file_size =$_FILES['myfile']['size'];
      $file_tmp =$_FILES['myfile']['tmp_name'];
      $file_type=$_FILES['myfile']['type'];
      // $file_ext=strtolower(end(explode('.',$file_name)));

      $file_ext = explode('.', $file_name);
      $file_ext = strtolower(end($file_ext));
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo "Successfully uploaded <br><br>";
      }else{
         foreach ($errors as $error) {
         	echo $error . "<br>";
         }
      }
   }
?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>File upload</title>
 </head>
 <body>
 	<form action="" method="POST" enctype="multipart/form-data">
 		<input type="file" name="myfile">
 		<input type="submit" value="UPLOAD">
 	</form>
 </body>
 </html>