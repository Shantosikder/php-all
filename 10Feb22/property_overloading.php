<?php
class PropertyTest

{

/** Location for overloaded data. */
private $data = array();

public function __set($name, $value) //__Masigc method
{
echo "Setting '$name' Property to '$value'\n";
$this->data[$name] = $value;
}

public function __get($name)
{
echo "<br>Getting '$name' Property with Value : ";
if (array_key_exists($name, $this->data)) {
return $this->data[$name];
}
} 

}

$obj = new PropertyTest;

$obj->a = "Shanto Sikder";
echo $obj->a . "\n";


$obj->b = "Fehor Ahmed";
echo $obj->b . "\n";

?>