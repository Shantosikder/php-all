<?php 

$dir = "../../../htdocs"; //file gula dekha.

$directorySize = 0;

// Open a known directory, and proceed to read its contents

if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) != false) {
            echo $file ."<br>";
            if(is_file($dir."/".$file));
                $directorySize += filesize($dir."/".$file);
        }
        closedir($dh);
    }
}
echo "Total directory Size: $directorySize";

 ?>