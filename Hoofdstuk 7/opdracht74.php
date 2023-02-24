<form method="post">
<p>Prijs<input type="number" name="prijs" value=""></p>
<p>Korting<input type="number" name="korting" value="">10</p>
<p><input type="submit" name="verzenden" value="verzenden"></p>
</form>

<?php

if(isset($_POST['prijs'])) {
    $prijs = $_POST['prijs'];
    $korting = $_POST['korting'];

    if($prijs == "prijs") {
        $som = $prijs / 100 * $korting;
        echo "Bedrag inclusief $korting BTW : $euro; $som,-";
    } elseif($korting == "korting") {
        $som = $bedrag / 100 * 121;
        echo "Bedrag inclusief $korting BTW : $euro; $som,-";
    }

}







?>