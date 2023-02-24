<?php

session_start();

if(empty($_SESSION["cijfer"])) {
    $_SESSION["cijfer"] = array();
}
?>

<form action="#" method="post">
    Cijfer <input type="text" name="cijfer" min="10" max="0" value="0" required> <br>
    <input type="submit" value="toevoegen">
</form>

<br><br>

<?php
$aantal = sizeof ($_SESSION["cijfer"]);
echo "Aantal ingevoerde cijfers: $aantal";

$gemiddelde = 0;

if($aantal > 0) {
    for($i=0;$i<$aantal;$i++) {
        $gemiddelde+= $_SESSION["cijfer"][$i];
        // $_SESSION["cijfer"][0]; 7
        // $_SESSION["cijfer"][1]; 8
        // $_SESSION["cijfer"][2]; 6
        
    }
    $gmiddelde = $gemiddelde / $aantal;
}
echo "</br>Gemiddelde: ";
echo round ($gemiddelde,1);

?>
