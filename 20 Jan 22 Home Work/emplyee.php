<?php

use Employee as GlobalEmployee;

class Employee{

    public $name = "Shanto Sikder";
    public $age  =  23;
   
}

$emp = new Employee;

echo $emp->name;

echo "<br>";

echo $emp->age;


?>