
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style type="text/css">
    form{
      border: 2px solid black;
      width: 400px;
      padding: 50px;
    }
  </style>
</head>
<body>
  
<center>
  <form method="post" action="">
  <h2>Large Number Form:</h2>
  Enter the first number:<br>
  <input type="text" name="num1"><br>
  Enter the second number:<br>
  <input type="text" name="num2"><br>
  Enter the third number:<br>
  <input type="text" name="num3">
  <br>
  <br>
  <input type="submit" name="check" value="Check">
</form>
</center>
</body>
</html>
<?php
if(isset($_POST["submit"])){
      $num1=$_POST["num1"];
      $num2=$_POST["num2"];
      $num3=$_POST["num3"];
      if($num1>$num2 && $num1>$num3){
        echo $num1;
      }
      else{
        if($num2>$num1 && $num2>$num3){
          echo "<br> Largest Number is $num2";
        }
        else
          echo "<br> Largest Number is $num3";
      }
  }
?>