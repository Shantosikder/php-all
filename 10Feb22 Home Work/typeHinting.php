<?php

// function car(array $names){
//     foreach ($names as $name){
//         echo $name."<br>";
//     }
// }

// $test = ["BMW","Toyta"];
// car($test);

##############################

// class hello{
//     public function sayhello(){
//         echo "Hello Everyone";
//     }
// }

// class bye{
//     public function saybye(){
//         echo "Bye Everyone";
//     }
// }

// function owo ( hello $c){
//     $c->sayhello();
// }

// $test = new hello();
// owo($test);


##############


class school{
    public function getnames($names){
        echo "<ol>";
      foreach ($names->names() as $name) {
       echo "<li>".$name."</li>";
      }
      echo "</ol>";
    }
}

class student{
    public function names(){
        return ["Shanto","Rana"];
    }
}

class laibary{

}

$stu = new student();
$sch = new school();
$lib = new laibary();


$sch->getnames($stu);







