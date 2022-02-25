<?php 

$dir = "../../pwad50shanto";

// Open a known directory, and proceed to read its contents

if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) != false) {
        	echo "<br>";
            echo "filename: $file : filetype: ";
        }
        closedir($dh);
    }
}


## alada vabe output dekhar jonno.
echo "<h1>Alada Output:</h1>";

echo "<br>";
echo is_dir($dir);
echo "<br>";
echo opendir($dir);
echo "<br>";
echo readdir(opendir($dir));



//file a ki ki folder ache ta opendir diye dakte hoy.
 ?>