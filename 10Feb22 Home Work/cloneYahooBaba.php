<?php 


class student{
    public $name;
    public $course;

    public function __construct($n){
        $this->name = $n;

    }
}

    $student1 = new student('Shanto Sikder');

    // $student2 = &$student1; //referance pus value

    $student2 = clone $student1; 
    
    $student2->name = 'Marzia';

   echo  $student1->name."\n";
   echo  $student2->name;


?>
