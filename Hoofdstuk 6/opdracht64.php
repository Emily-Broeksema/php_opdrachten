<?php

function Omtrek(){
    $pi = (pi());
    $lengte = $_POST['lengte'];
    $diameter = $lengte * 2;
    $som = $diameter * $pi;

    $antwoord = number_format($som, 1);
    echo "De omtrek van een cirkel met straal $lengte is : $antwoord</br>";
}

function Oppervlakte(){
    $pi = (pi());
    $lengte = $_POST['lengte'];
    $som = $lengte * $lengte * $pi;

    $antwoord = number_format($som, 1);
    echo "De oppervlakte van ee crikel met straal $lengte is : $antwoord</br>";
}

if(isset($_POST['oppervlakte'])){
    Omtrek();
}

if(isset($_POST['oppervlakte'])){
    Oppervlakte();
}

?>

<form method="post">
<input type="number" name="lengte" placeholder="Geef lengte van de circle" required/>
<input type="submit" name="omtrek" value="omtrek"/>
<input type="submit" name="oppervlakte" value="Oppervlakte"/>
</form>

