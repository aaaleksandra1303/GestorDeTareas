<?php

$string = file_get_contents("false_technician.json");
$json_a = json_decode($string, true);
foreach ($json_a as $key => $value) {
    echo $key;
    echo "<br>";

}


?>
