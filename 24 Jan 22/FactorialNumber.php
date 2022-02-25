
<html>  
<head>  
<title>Factorial Program using loop and Form in PHP</title>  
</head>  
<body>

<form method="post">  

    <h2>Factorial Program using loop | Form in PHP:</h2>
    <input type="number" name="number" id="number">  
    <input type="submit" name="submit" value="Submit" /> 

</form>  

<?php  

    if($_POST){  
        $fact = 1;  
        //getting value from input text box 'number'  
        $number = $_POST['number'];  
        echo "Factorial Number: $number:<br><br>";  
        //start loop  
        for ($i = 1; $i <= $number; $i++){         
            $fact = $fact * $i;  
            }  
            echo "Factorial Value: ".$fact . "<br>";  
    }  
?>  

</body>  
</html> 


<!-- <h2>Factorial using Recursion in PHP:</h2> -->

<?php  

// function fact ($n)  
// {  
//     if($n <= 1)   
//     {  
//         return 1;  
//     }  
//     else   
//     {  
//         return $n * fact($n - 1);  
//     }  
// }  
  
// echo "Factorial of 6 is " .fact(6);  

?>


<?php

// $num = 10; 

// $factorial = 1; 

// for ($x=$num; $x>=1; $x--) 

// {  

//   $factorial = $factorial * $x; 

// }  

// echo "Factorial of $num is $factorial"; 

?> 