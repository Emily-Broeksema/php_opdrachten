<?php
///////////////SERVER-instellingen voorbeeld PDO connectie////////////////
// login: tcr
// wachtwoord: tcr

// de database heet datbase (staat in Phpmyadmin)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gastenboek";

// connectie maken met de PDO
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>