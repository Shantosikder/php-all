<?php 

for($i=1; $i<=20; $i++){

    echo $i.")Hello Shanto Sikder<br>";

}
?>

<h2>For Loop with Table:</h2>

<?php 

$name = array("shanto","Rana","Waliul","al amin","Abhi","Momin","Sojol","Rasidul","Fehor");

echo("<table><tr><th>Serial No</th><th>Name</th></tr>");

for($a=0; $a<count($name); $a++){

    echo("<tr>");
    echo "<td>".($a+1)."</td>";
    echo "<td>".$name[$a]."</td>";
    echo("</tr>");
}

echo "</table>";


?>

