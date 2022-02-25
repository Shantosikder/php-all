<h2>Assocative Array Sort</h2>

<?php
    $country = array("Canada"=>"Toronto", "USA"=>"New York", "Srilanka"=>"Colombo", "Nepal"=>"Kathmundu", "Bangladesh"=>"Dhaka");

    ksort($country);

foreach ($country as $key => $value) {
    echo "Country: $key -- Capital: $value<br>";
}
?>