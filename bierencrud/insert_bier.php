<?php

    require_once('functions.php');

    //Om te testen wat er in $_POST zit
    //var_dump($_POST);
    //exit;

    // Test of er op de wijzig-koop is gedrukt
    if(isset($_POST) && isset($_POST['btn_insert'])){

        //Laat informatie die je in de form hebt ingevuld zien
        //var_dump($_POST);
        //exit;

        InsertBier($_POST);

    // header("location: insert_bier.php?$_POST")
    
    }

    

   ?>

<html>
    <body>
        <form method="post">
        <br>
        Biercode:<input type="" name="biercode" value=""><br>
        Naam:<input type="" name="naam" value=""> <br>
        Soort:<input type="" name="soort" value=""><br>
        Stijl:<input type="" name="stijl" value=""><br>
        Alcohol:<input type="" name="alcohol" value=""><br>
        
        

        <!---Brouwcode:<input type="" name="brouwcode" value="<?php echo $row['brouwcode'];?>"><br> --->

        <br></br>
        <input type="submit" name="btn_insert" value="Insert"><br>
        </form>
    </body>
</html>

