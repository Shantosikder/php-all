<!-- <html>
    <head>
        <title>Factorial program using loop and form in php </title>
    </head>
</html>

<body>
    <form action="" method="POST">

        <h2>Factorial program using loop | fomr in php:</h2>
        
        <input type="number" name="number" id="number">
        <input type="submit" name="submit" value="submit">
    </form>
</body> -->

<?php 

// if($_POST){
//     $fact = 1;

//     $number = $_POST['number'];
//     echo "Factrial Number: $number:<br><br>";
//     for($i = 1; $i<=$number; $i++){
//         $fact = $fact*$i;
//     }
//     echo "Factrial value: ".$fact."<br>"; 
// }

?>

<html>
    <head>
        <title>Factorial program using loop and form in php </title>
    </head>
</html>

<body>
    <form method="POST">

        <h2>Factorial program using loop | fomr in php:</h2>
        
        <input type="number" name="number" id="number">
        <input type="submit" name="submit" value="Check">
    </form>
</body>

<?php 

if($_POST){
    $fact = 1;

    //get form value

    $number = $_POST['number'];
    echo "Factrial Number: ".$number."<br><br>";

    //loop start
    for($i = 1; $i<=$number; $i++){
        $fact = $fact*$i;
    }
    echo "Factrila Value: ".$fact."<br>";
}


?>