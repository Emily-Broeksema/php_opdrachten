<?php

function CrudBieren(){

// Haal alle bier record uit de tabel

$result = GetData("bier");

//print table    
PrintCrudBier($result);
//PrintTableTest($result);

}

?>