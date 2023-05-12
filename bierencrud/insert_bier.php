<?php

    require_once('functions.php');
    // Test of er op de wijzig-koop is gedrukt
    if(isset($_POST) && isset($_POST['btn_wzg'])){

        UpdateBier($_POST);

    // header("location: update.php?$_POST")
    
    }



    if(isset($_GET['biercode'])){

       

        echo "<h1>Insert Bier</h1>";

        echo "Data uit het vorige formulier:<br>";

        // Haal alle info van de betreffende biercode $_GET['biercode']
        $biercode = $_GET['biercode'];

        $row = GetBier($biercode);
        // var_dump($row)
    
    

   ?>

<html>
    <body>
        <form method="post">
        <br>
        Biercode:<input type="" name="biercode" value="<?php echo $row['biercode'];?>"><br>
        Naam:<input type="" name="naam" value="<?php echo $row['naam'];?>"> <br>
        Soort:<input type="" name="soort" value="<?php echo $row['soort'];?>"><br>
        Stijl:<input type="" name="stijl" value="<?php echo $row['stijl'];?>"><br>
        Alcohol:<input type="" name="alcohol" value="<?php echo $row['alcohol'];?>"><br>
        <?php
            dropDown('brouwcode', GetData('brouwer'));
        ?>

        <!---Brouwcode:<input type="" name="brouwcode" value="<?php echo $row['brouwcode'];?>"><br> --->

        <br></br>
        <input type="submit" name="insert" value="insert"><br>
        </form>
    </body>
</html>

<?php
    }
?>
