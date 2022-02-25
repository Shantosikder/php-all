<form method="post">  
Enter a Number: <input type="text" name="num">
<input type="submit" name="submit" value="Check">  
</form> 

<?php  
if($_POST)  
{  
    $num=$_POST['num'];  
    for ($i = 2; $i <= $num-1; $i++) {  
      if ($num % $i == 0) {  
      $value= True;  
      }  
}  
if (isset($value) && $value) {  
     echo $num . ' is Not prime Number';  
}  else {  
   echo $num . ' is prime Number';  
   }   
}  

?>