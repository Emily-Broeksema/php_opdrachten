<form mehtod="post">
<p>Getal 1<input type="number" name="getal1" value="getal1"> </p>
<input type="radio" name="rekenen" value="optellen"> Optellen
<input type="radio" name="rekenen" value="aftrekken"> aftrekken
<input type="radio" name="rekenen" value="vermenigvuldigen"> vermenigvuldigen
<input type="radio" name="rekenen" value="delen"> delen
<p>Getal 2<input type="number" name="getal2" value="getal2"></p>
<input type="submit" name="Berekenen" value="berekenen">
</form>

<?php

if(isset($_POST['rekenen'])) {
    $waarde = $_POST['rekenen'];
    $getal1 = $_POST['getal1'];
    $getal2 = $_POST['getal2'];

    if($waarde == "optellen") {
        $som = $getal1 + $getal2;
        echo "$getal1 + $getal2 = $som";
        
    } else if($waarde == "aftrekken") {
        $som = $getal1 - $getal2;
        echo "$getal1 - $getal2 = $som";

    } else if ($waarde == "vermenigvuldigen") {
        $som = $getal * $getal2;
        echo "$getal1 x $getal2 = $som";

    } else if ($waarde == "delen") {
        $som = $getal1 / $getal2;
        echo "$getal1 : $getal2 = $som";
    }
}

?>