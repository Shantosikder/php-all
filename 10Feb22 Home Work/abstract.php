<?php

abstract class Car {
    public $name;
    public function __construct($name){
        $this->name = $name;
    }
    abstract public function intro() : string;
}

//child classes 
class Audi extends Car{
    public function intro() : string{
        return "Choose German quality! I m an $this->name!";
    }
}

class Volvo extends Car{
    public function intro() : string{
        return "proud to be Swedish Im a $this->name!";
    }
}

class Citroen extends Car {
    public function intro() : string{
        return "French extravagance  i m a $this->name!";
    }
}

//create object form the child classes
$audi = new audi("Audi");
echo $audi->intro();
echo "<br>";

$volvo = new citroen("citiroen");
echo $volvo->intro();
echo "<br>";

$citroen = new citroen("citiroen");
echo $citroen->intro();