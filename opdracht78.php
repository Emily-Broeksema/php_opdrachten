<?php

session_start();

?>

<h1>Array items in een sessie</h1>
<form action="" method="post">
   <input type="text" value="Appel" name="item"> <br>
   <input type="submit" value="Teovoegen" name="submit">
</form> <br>
<a href="opdracht76.php?knop=schudden">Schudden met shuffle</a> <br>
<a href="opdracht76.php?knop=az">Sorteren van a-z, met sort</a> <br>
<a href="opdracht76.php?knop=wissen">Session wissen</a> <br> <br>

<?php

// maak een array met sessie.
error_reporting(0);
if(!$_SESSION['lijst']){
    $_SESSION['lijst'] = array();
}

// controleer met isset of de post niet lang is en trim dit valide.
if (isset($_POST['item']) && trim($_POST['item']) != '') {

// voeg een waarde toe.
$veld = trim($_POST['item']);

    // controleer of er dezelfde items zijn.
    if (!in_array($veld, $_SESSION['lijst'], true)) {

        // voeh toe aan de sessie
        $_SESSION['lijst'][] = $veld;
        /////////////////////////
        // controleren of het gelukt is.. (optioneel)
        /*
        if (!in_array($veld, $_SESSION['lijst'], true)){
            echo "Niet toegevougd <br>";
        } else {
            // echo "<br>Toegevoegd: ";
        }
    } else {
        echo "<br>Dit item bestaat al.";
        */ ///////////////////////
    }

} 

// laat alles uit de array zien, als de arrat niet leeg is.
if (!empty($_SESSION['lijst'])) {
    echo "<h2>Winkelmand</h2>";

// haal alle waarden op uit de array en laat het zien.
    foreach($_SESSION['lijst'] as $waarden) {
        echo "$waarden <br>";
    }
}

// de shuffel knop.
if(isset($_GET['knop'])) {
    if($_GET['knop'] == "schudden") {
        // shuffle voor willekeurig.
        shuffel($_SESSION['lijst']);
    }
}

// de sorteer knop van A tot Z.
if(isset($_GET['knop'])) {
    if($_GET['knop'] == "az") {
    // sort het weergeven van de functie.
    sort($_SESSION['lijst']);
    }
}

// de sessie wissen knop.
if(isset($_GET['knop'])) {
    if($_GET['knop'] == "wissen") {
        $_SESSION = array();
        session_destroy();
        echo "Alle sessievariabelen worden verwijderd.";

// terug sturen naar het begin. (0 seconden = direct)
header('Refresh: 0; url=opdracht76.php');
    }
}
?>