<?php

var_dump($_POST);

// Maak connectie database

include "connect.php";

// select username en password mbv $_POST['username']
if (ISSET($_POST['login-btn'])){
    if($_POST['username'] != "")

// komt user voor in tabel

// Ja create loggin session
session_start();

if(!isset($_SESSION['user'])) {
   
echo "<br> Registreer<br>";

echo '<a href="registration.php"> Registreer </a>';
} 

// Nee: invalid username

else {
    
echo "Invalid username";
}
}
?>
