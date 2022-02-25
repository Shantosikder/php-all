<?php 

// $text = "This is a link to http://www.wjgilmore.com/.Again I am putting this adddress http://www.yahoo.com/";

// echo preg_replace("/http:\/\/(.*)\//", "<a href="\"\${0}\>\${0}</a>",$text);



// $string = 'April 15, 2002';

// $pattern = '/(\w+) (\d+),(\d+)/i';

// $replacement = 'May ${2}, 2007';

// echo preg_replace($pattern, $replacement, $string);

 ?>

<?php

$string = 'April 20, 2003';
$pattern = '/(\w+) (\d+), (\d+)/';
$replacement = 'May ${2},$3';
echo preg_replace($pattern, $replacement, $string);

?>




