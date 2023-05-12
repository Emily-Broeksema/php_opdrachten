<?php

// de database heet datbase (staat in Phpmyadmin)
$servername = "localhost";
$username = "browser";
$password = "os";
$dbname = "besturingssysteem";

// connectie maken met de PDO
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



?>