<?php 

$student = array(

array("name"=>"Nabil","MCQ"=>30,"Descriptive"=>40,"Evidance"=>40),
array("name"=>"Amzad","MCQ"=>28,"Descriptive"=>30,"Evidance"=>25),

);

foreach($student as $value){
    $rsum = $value['MCQ'] + $value['Descriptive'];
    if($rsum>=70 && $value['Evidance']>=30){
        $result = "Pass";
    }else{
        $result = "Fail";
    }

    echo $value['name']." : " .$rsum." $result"."<br>";
}



    ?>