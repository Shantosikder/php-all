<?php 
    class myfile{
        public $id;
        public function __construct($n){
            $this->id = $n;
        }
        
        public function find(){
            $fh = fopen("results.txt", 'r');
            while(!feof($fh)){
                $data = fgets($fh);
                $x = explode(",", $data);
                //echo "<pre>";
                //print_r($x);
                list($id, $name, $batch) = $x;
                // echo "<pre>";
                // print_r($id);
               if($id == $this->id){
                   echo $name;
               }
            }
        }
    }
    $obj = new myfile(5);
    $obj->find();
?>