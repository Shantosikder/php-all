<?php


class simpleClass{
    private $x;
    protected $y = "shanto sikder";
    public const A = "Somthing";

    public function info(){
        return $this->x = "Hello shanto";
    }
}

$obj = new simpleClass();
echo $obj->info();

echo simpleClass::A;  //Static function call cora hoice 

simpleClass::info();



?>