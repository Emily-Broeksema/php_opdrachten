<?php
// auteur: Wigmans
// functie: algemene functies tbv hergebruik
 function ConnectDb(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bieren";
   
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        echo "Connected successfully";
        return $conn;
    } 
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

 }

 
 
 function GetData($table){
    // Connect database
    $conn = ConnectDb();

    // Select data uit de opgegeven table methode query
    // query: is een prepare en execute in 1 zonder placeholders
    // $result = $conn->query("SELECT * FROM $table")->fetchAll();

    // Select data uit de opgegeven table methode prepare
    $query = $conn->prepare("SELECT * FROM $table");
    $query->execute();
    $result = $query->fetchAll();

    return $result;
 }

 function GetBrouwer($brouwcode){
    // Connect database
    $conn = ConnectDb();

    // Select data uit de opgegeven table methode query
    // query: is een prepare en execute in 1 zonder placeholders
    // $result = $conn->query("SELECT * FROM $table")->fetchAll();

    // Select data uit de opgegeven table methode prepare
    $query = $conn->prepare("SELECT * FROM brouwer WHERE brouwcode = $brouwcode");
    $query->execute();
    $result = $query->fetch();

    return $result;
 }


 function OvzBrouwer(){

    // Haal alle bier record uit de tabel 
    $result = GetData("brouwer");
    
    //print table
    PrintTable($result);
    //PrintTableTest($result);
    
 }

 ///////////////////////////////////////////////////////////////////
 function OvzBrouwers(){
    // Haal alle bier record uit de tabel 
    $result = GetData("brouwer");
    
    //print table
    PrintTable($result);
     
 }

 function PrintTableTest($result){
    // Zet de hele table in een variable en print hem 1 keer 
    $table = "<table border = 1px>";
    // print elke rij
    foreach ($result as $row) {
        echo "<br> rij:";
        
        foreach ($row as  $value) {
            echo "kolom" . "$value";
        }          
        
    }
}

// Function 'PrintTable' print een HTML-table met data uit $result.
function PrintTable($result){
    // Zet de hele table in een variable en print hem 1 keer 
    $table = "<table border = 1px>";

    // Print header table

    // haal de kolommen uit de eerste [0] van het array $result mbv array_keys
    $headers = array_keys($result[0]);
    $table .= "<tr>";
    foreach($headers as $header){
        $table .= "<th bgcolor=gray>" . $header . "</th>";   
    }

    // print elke rij
    foreach ($result as $row) {
        
        $table .= "<tr>";
        // print elke kolom
        foreach ($row as $cell) {
            $table .= "<td>" . $cell . "</td>";
        }
        $table .= "</tr>";
    }
    $table.= "</table>";

    echo $table;
}


function CrudBrouwer(){

    //Menu-item insert
    $txt = "
    <h1>Crud BROUWER</h1>
    <nav>
    <a href='insert_bier.php'>Toevoegen nieuw biertje</a>
    </nav>";
    echo $txt;

    // Haal alle bier record uit de tabel 
    $result = GetData("brouwer");
    
    //print table
    PrintCrudBrouwer($result);
    
 }
function PrintCrudBrouwer($result){
    // Zet de hele table in een variable en print hem 1 keer 
    $table = "<table border = 1px>";

    // Print header table

    // haal de kolommen uit de eerste [0] van het array $result mbv array_keys
    $headers = array_keys($result[0]);
    $table .= "<tr>";
    foreach($headers as $header){
        $table .= "<th bgcolor=gray>" . $header . "</th>";   
    }
    $table .= "</tr>";

    // print elke rij
    foreach ($result as $row) {
        
        $table .= "<tr>";
        // print elke kolom
        foreach ($row as $cell) {
            $table .= "<td>" . $cell . "</td>";
        }
        // $table .= "</tr>";
        
        // Wijzig knopje
        $table .= "<td>". 
            "<form method='post' action='update_brouwer.php?brouwcode=$row[brouwcode]' >       
                    <button name='wzg'>Wzg</button>	 
            </form>" . "</td>";

        // Delete via linkje href
        $table .= '<td><a href="delete_brouw.php?biercode='.$row["brouwcode"].'">verwijder</a></td>';
        
        $table .= "</tr>";
    }
    $table.= "</table>";

    echo $table;
}

function UpdateBrouwer($row){
    echo "Update row<br>";
    // var_dump($row);

try{
    // Connectie maken Database
    $conn = ConnectDb();
    

    $sql = "UPDATE brouwer
    SET
        naam = '$row[naam]',
        land = '$row[land]',
        WHERE brouwcode = $row[brouwcode]";

        // echo $sql;
        // exit;

        $query = $conn->prepare($sql);
        $query->execute();

}

catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


}



function DeleteBrouwer($brouwcode){
    echo "Delete row<br>";
    // var_dump($brouwcode);

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
        // sql to delete a record
        $sql = "DELETE FROM bieren WHERE brouwcode = $brouwcode;";
      echo $sql;
      exit;
      
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "Record deleted successfully";
      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
      
      $conn = null;
}


function dropDown($label, $data, $row_selected){

     $txt = "

     <label for='$label'>Choose a $label:</label>
     <select name='$label' id='$label'>";
    
     foreach($data as $row){
    if ($row['brouwcode'] == $row_selected){
        $txt .= "<option value='$row[brouwcode]' selected='selected'>$row[naam]</option>\n";
    } else {
        $txt .= "<option value='$row[brouwcode]'>$row[naam]</option>\n";
    }
 }
     $txt .= "</select>";
}
?>