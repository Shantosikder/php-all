<?php  
      
    // class Test1  
    // {  
    //     public $var= "hello shanto this is our oop";  
    // }  
    // //create function with class name argument  
    // function typehint(Test1 $t1)  
    // {  
    //     //call variable  
    //     echo $t1->var;  
    // }  
    // //call function with call name as a argument  
    // // typehint(new Test1()); 

  

      class a  
    {  
        public $c= "Hello shanto this is our oop type hinting";  
    }  
    //create function with class name argument  
    function display(a $a1)  
    {  
        //call variable  
        echo $a1->c;  
    }  
    display(new a());


?>