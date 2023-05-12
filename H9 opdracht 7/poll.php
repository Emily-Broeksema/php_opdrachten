<?php

$option1 = 0;
$option2 = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $selectedOption = $_POST['poll'];

    if ($selectedOption == 'option1') {
        $option1++;
    } elseif ($selectedOption == 'option2') {
        $option2++;
    }

    header('Location: poll.php');
    exit;

    // Connect to the database
$pdo = new PDO("mysql:host=localhost;dbname=mydatabase", "myusername", "mypassword");

// Prepare the update statement
$stmt = $pdo->prepare("UPDATE mytable SET column1 = ?, column2 = ? WHERE id = ?");

// Set the parameters for the update statement
$newColumn1Value = "new value for column 1";
$newColumn2Value = "new value for column 2";
$idToUpdate = 123;

// Execute the update statement
$stmt->execute([$newColumn1Value, $newColumn2Value, $idToUpdate]);

}

?>

<form method="post">
    <p>Wat is 1+1?</p>
    <label><input type="radio" name="poll" value="option1"> 4</label> <br>
    <label><input type="radio" name="poll" value="option2"> 2</label> <br>
    <button type="submit">Submit</button>
</form>

<p>4: <?php echo $option1; ?></p>
<p>2: <?php echo $option2; ?></p>