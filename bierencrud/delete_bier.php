<?php

    require_once('functions.php');
    // Test of er op de wijzig-koop is gedrukt
    if(isset($_GET['biercode'])){


        DeleteBier($biercode);

    header("location: crud_bieren.php");
    
    }



   ?>

