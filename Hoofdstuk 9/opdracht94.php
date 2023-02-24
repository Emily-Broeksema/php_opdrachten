<?php

if($inkomen <= 25000) 
    $belasting = $inkomen * 0.33;
else if ($inkomen <= 50000)
$belasting = 1000 + ($inkomen - 10000) * 0.45;



?>