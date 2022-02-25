<?php

class base{

    public $name = "parent class";
    public function clac($a,$b){
        return $a * $b;
    }
}

class derived extends base{

    public $name = "childe class"; //overwrite property

    public function clac($a,$b){
        return $a + $b;
    }
}

$test = new base();
// echo $test->name;

// echo "<br>";

$test = new derived();
echo $test->clac(50,10);
