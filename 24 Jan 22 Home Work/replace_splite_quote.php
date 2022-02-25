<?php 


// $name = "php is the web php php scripting language of cchoice";

// $name = "April 20, 2022";

// $name = "{startDate} = 1999-5-10";

// $pattern = "/(\w+) (\d+), (\d+)/i";

// $replacement = "$1 25, $3";

// echo preg_replace($pattern,$replacement,$name);


?>

<?php 

// echo preg_quote("$5.88");

 //echo preg_quote("https://");

?>

<?php 

$name = "php is the web php scripting language of cchoice";

//$splite = preg_split("/[\s]+/",$name,5); //3rd peramiter holo limit

//$splite = preg_split("/(web|of)/",$name);  //web or off ar jagay break diye oigula bade baki gula print dibe

//$splite = preg_split("/\//",$name);

$splite = preg_split("/ /",$name,-1,PREG_SPLIT_OFFSET_CAPTURE); //String ke index number akare show kore

echo "<pre>";

print_r($splite);





?>