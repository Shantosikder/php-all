
<?php 

$student = array(

array("name"=>"Shanto","MCQ"=>30,"Descriptive"=>40,"Evidance"=>40),

array("name"=>"Rana","MCQ"=>28,"Descriptive"=>37,"Evidance"=>37)

);

foreach($student as $value){
    $ch = $value['MCQ']  + $value['Descriptive'];
    if($ch>=70 && $value['Evidance']>=30){
        $pass = "pass";
    }else{
        $pass = " Fail";
    }
    echo $value['name']. " : " .$ch . " $pass"."<br>";
}


?>


<?php 
    
    // $studentData = array(
    //     "Student1"=>array("MCQ"=>40, "Descriptive"=>37, "Evidence"=>30),
    //     "Student2"=>array("MCQ"=>28, "Descriptive"=>40, "Evidence"=>40)
    // );

    // foreach ($studentData as $name => $sub) {
    //         printf("Students names are %s <br>", $name);
    //     if(($sub['MCQ']+$sub['Descriptive']) >=70 && $sub['Evidence']>=30) {
    //         echo "PASS" . "<br>";
    //     }else {
    //         echo "Fail" . "<br>";;

    //     }
    // }

 ?>


