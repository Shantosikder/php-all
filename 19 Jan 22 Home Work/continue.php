<?php 

$days = array("Sunday","Monday","Tuesday","Wednesdy","Thursday","Friday","Saturday");

for($i=0; $i<count($days); $i++){
    if($days[$i]=="Friday"){
        continue;      // ater mani holo je value ta dibo oita bade onno value asbe.
    }
    echo "Today is ".$days[$i]."<br>";
}

?>