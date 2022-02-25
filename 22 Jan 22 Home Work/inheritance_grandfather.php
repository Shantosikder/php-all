<?php

use grandFather as GlobalGrandFather;

class grandFather{
    public $name = "shanto sikder";

    public function getName(){
        return $this->name;
    }
}

class daday extends GlobalGrandFather

{
    public function getFatherName()

    {
        return $this->name;
    }
}

$obj = new daday;
echo $obj->getFatherName();

echo "<br>";

$obj1 = new grandFather;
echo $obj1->name;








?>