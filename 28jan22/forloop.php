<?php 

$name = array("shanto","Rana","Waliul","Al Amin","Rana","Waliul","Al Amin","Waliul","Al Amin","Rana","Waliul");

echo("<table><tr><th>Number</th><th>Name</th></tr>");

for($i=0; $i<count($name); $i++) { 

	echo("<tr>");
	echo "<td>".($i+1)."</td>";
	echo "<td>".$name[$i]."</td>";
	echo("</tr>");
}

echo "</table>";


 ?>



