<?php 


$name = array("Shanto"=>"90", "Rana"=>"80", "Waliul"=>"20","Al Amin"=>"33","Mizan"=>"40");

echo("<table border=\"1\" ><tr><th>Name</th><th>Mark</th></tr>");

foreach($name as $key => $value){
    echo "<tr>";
    echo "<td>". $key."</td>";
    echo "<td>".$value."</td>";
    echo "<tr>";
}

echo "</table>";

echo "<hr>";

echo "<h2>Max OR Min Result:</h2>";



$x = max($name);
$x1 = array_search($x,$name);
echo "Max Name: ". $x1."<br>";
echo "Max Number: ". $x."<br>";

$y = min($name);
$y1 = array_search($y,$name);
echo "Min Name: ". $y1."<br>";
echo "Min Number: ". $y."<br>";


?>


