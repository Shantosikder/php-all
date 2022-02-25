<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $name = $_FILES['image']['name'];
      $size =$_FILES['image']['size'];
      $tmp =$_FILES['image']['tmp_name'];
      $type=$_FILES['image']['type'];

      $ext=explode('.',$name);
      $ext=strtolower(end($ext));
      
      $exts= array("jpeg","jpg","png","pdf");
      
      if(in_array($ext,$exts)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($size > 400000){
         $errors[]='File size must be excately 400 kb';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($tmp,"UploadFile/".$name);
         echo "<b>File Uploaded Successfull</b>";
      }else{
         foreach($errors as $err){
            echo $err."<br>";
         }
      }
   }
?>
<html>
   <body>
      
      <form action="" method="POST" enctype="multipart/form-data">
         <h2>File Uplode:</h2>
         <input type="file" name="image" /><br><br>
         <input type="submit"/>
      </form>
      
   </body>
</html>