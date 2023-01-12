<form method="post">
<input type="radio" name="kleur" value="aqua"> Aqua
<input type="radio" name="kleur" value="lightgreen"> Lightgreen
<input type="radio" name="kleur" value="pink"> Pink
<input type="radio" name="kleur" value="violet"> Violet
<input type="submit" name="instellen" value="instellen">
</form>

<?php

if(isset($_POST['kleur'])) {
    $kleur = $_POST['kleur'];
    
    if($kleur == "aqua") {
        echo "<style>body{background-color: aqua;}</style>";
    } else if ($kleur == "lightgreen") {
        echo "<style>body{background-color: lightgreen;}</style>";
    } else if ($kleur == "pink") {
        echo "<style>body{background-color: pink;}</style>";
    } else if ($kleur == "violet") {
        echo "<style>body{background-color: violet;}</style>";
    }

}
?>