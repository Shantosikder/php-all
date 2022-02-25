<?php



$text = '<p>Test paragraph.</p>
<!-- Comment --> 
<a href="#fragment">Other text</a>';


// Allow <p> and <a>
echo strip_tags($text, '<p><a>');


?>