<?php

class person{
    public $name;
    public function __construct($name){
        $this->name = $name;
    }
}

$obj1 = new person('shanto');
echo "<pre>";
var_dump($obj1);


$obj2 = clone $obj1;
$obj2->name = 'amzad';
echo "<pre>";
var_dump($obj2);

