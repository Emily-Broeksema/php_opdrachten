<?php

// functie: Programma overzicht v=brouwer
// auteur: Wigmans

// Initialisatie
include 'functions.php';

// main

// Connect database brouwer
$conn = ConnectDb();

// Print brouwer
OvzBrouwer($conn);

?>