<?php 

echo $_SERVER['REQUEST_METHOD'];

  if($_SERVER['REQUEST_METHOD']=='post'){
     $secretNumber =100;
    if ($_POST['guess']== $secretNumber){
        echo "Congres";
    }else{
        echo "Try again";
}

   }


 ?>

 <form action="post">
 	<input type="text" name="guess">
 	<input type="submit" name="submit" value="submit">
 </form>