<?php

$uur = date("H");

//$uur = 15;

//echo $uur;


if($uur > 6 & $uur <12 )
{
    echo "Het is ochtend";
}

if($uur > 12 & $uur <18)
{
    echo "Het is middag";
}

if($uur > 18 & $uur <24)
    echo "Het is avond";
?>