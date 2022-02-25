<?php 

// $x = 400;

// unset($x);

// if(isset($x)){
//     echo "yes".'$x'."is set";
// }else{
//     echo "No SET";
// }






class student{
    public $course;
    private $fristName;
    private $lastName;

    public function setName($fname, $lname){
        $this->fristName = $fname;
        $this->lastName = $lname;
    }
    public function __isset($property) //private property assess
    {
        echo isset($this->$property);
    }
}

$test = new student();
//$test->course = "php"; //public 

$test->setName("shanto","sikder"); //private

//echo isset($test->course); //public

echo isset($test->fristName); //private










?>