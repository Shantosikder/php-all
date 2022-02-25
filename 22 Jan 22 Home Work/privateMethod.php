<?php

use person as GlobalPerson;

class person{

    private $name = "";
    private $age  = "";

    public function setName($x){
        $this->name = $x;
    }
    public function setAge($y){
        $this->age = $y;
    }
    public function getInfo(){
        echo "Hi! my Name is {$this->name} And my Age is {$this->age}";
    }

}


$obj = new Person;
$obj->setName("Nabil Rahman");
$obj->setAge("24");
$obj->getInfo();
















?>