<?php 
    class student{
        public $id;
        public function __construct($n){
            $this->id = $n;
        }
        
        public function result(){
            $fh = fopen("results.txt", 'r');
            while(!feof($fh)){
                $data = fgets($fh);
                $x = explode(",", $data);

                list($id, $name, $batch) = $x;

               if($id == $this->id){
                   echo "<b>ID: </b>" . $id . "<br>";
                   echo "<b>Name: </b>" . $name . "<br>";
                   echo "<b>Batch: </b>" . $batch . "<br>";
                   
               }
            }
        }
    }
    $obj = new student(1);
    $obj->result();
?>