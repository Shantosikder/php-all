<?php


 // $string = "La pasta è il piatto più amato in Italia";
 // $translate = get_html_translation_table(HTML_ENTITIES);
 // echo strtr($string, $translate);


?>

<?php 

//$tags = array('<b>' => '<strong>', '</b>' => '</strong>');

$tags = array('<b>' => '<i>', '</b>' => '</i>');

$contact = '<b>Today in php powered news</b>';

echo strtr($contact,$tags);


 ?>