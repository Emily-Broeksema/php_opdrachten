<h1>Opdracht 6 hoofdstuk 9: gastenboek</h1>
<form method="post" action="">
    Naam: <input type="text" name="naam" id="naam"> <br><br>
    Bericht: <textarea type="text" name="bericht" id="bericht"></textarea> <br><br>
    <input type="submit" name="knop" id="knop">
</form>

<?php

include "connectpdo.php";

try {
    $stmt = $conn->prepare("INSERT INTO berichten (naam, bericht) VALUES (:naam, :bericht)");
    $stmt->bindParam(':naam', $naam);
    $stmt->bindParam(':bericht', $bericht);
    //$stmt->bindParam(':datumtijd', $datumtijd);

if (isset($_REQUEST['naam']))
{
    $naam = $_POST['naam'];
    $bericht = $_POST['bericht'];
   // $datumtijd = Date('');
    $stmt->execute();

header('Location: index.php');
}}  

catch(PDOException $e)
    {
        echo "Error: " . $e->getMessage();
    }
    $sqlSelect = "SELECT * from berichten";
$data = $conn->query($sqlSelect);

foreach ($data as $row) {
    echo $row['id']. " ";
    echo $row['datumtijd']. " ";
    echo $row['naam']. " ";
    echo $row['bericht']. " ";
    echo "<a href='VerwijderBericht.php?id=$row[id]'>Verwijderen</a>";
}
$conn = null;

?>