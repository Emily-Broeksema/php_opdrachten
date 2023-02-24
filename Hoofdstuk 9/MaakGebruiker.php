<?php

// Pagina om gebruikers aan te maken met encrypted wachtwoord 9.8.3

try {
    $db = new PDO("mysql:host=localhost;dbname=fietsenmaker", "root", "");
    $query = $db->prepare("INSERT INTO gebruikers(username, password)VALUES ('ik2', '" . sha1('geheim') . "')");
    if ($query->execute()) {
        echo "De nieuwe gegevens zijn toegevoegd.";
    } else {
        echo "Er is een fout opgetreden!";
    }
} catch(PDExeption $e) {
    die("Error!: " . $e->getmessage());
}

?>