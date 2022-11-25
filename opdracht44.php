<?php

$laptop = 1000;

$software = 40;

// boven 150 euro 19% erbij
if($laptop > 150) {
    $som = $laptop * 1.19 ;
    echo "De oude pris is: &euro; $laptop,-
    </br> Na verhoging van 19% is de prijs: &euro; $som,-"
}

/* 11% duurder
else if($software < 55) {
    code
}
else if
    code...
?>