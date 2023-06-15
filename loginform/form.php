<!DOCTYPE html>
<html lang="en">

<body>
    

<h1>PDO Login and Registration</h1>

</h3>Welcome op de HOME-pagina!</h3>

<h2>U bent niet ingelogd. Log in om verder te gaan.</h2>

<?php

// Activeer de session
session_start();

// Checj login session:m staat de user in de session?
if(!isset($_SESSION['user'])) {

    // Alert not login
echo "Niet ingelogd<br>";

    // toon login
echo '<a href="login_form.php"> Login </a>';
} else {

    // select user data from database
echo "Je bent ingelogd";
}


?>

</body>
</html>