
<?php 

$student = array(

array("name"=>"Shanto","MCQ"=>30,"Descriptive"=>40,"Evidance"=>40),

array("name"=>"Rana","MCQ"=>28,"Descriptive"=>37,"Evidance"=>37)

);

echo "<h2><u>Result:</u></h2>"."<br>";

foreach($student as $value){
    $ch = $value['MCQ']  + $value['Descriptive'];
    if($ch>=70 && $value['Evidance']>=30){
       
        $pass = " (pass)";
    }else{
        $pass = "  (Fail)";
    }
    echo $value['name']. " : " .$ch . " $pass"."<br>";
}

?>




