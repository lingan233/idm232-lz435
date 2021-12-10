<?php

// Find the id for the recipe

$new_recipe_id = $db_connection->insert_id;
echo '<pre> $new_recipe_id: <br>';
var_dump($new_recipe_id);
echo '</pre>';

$character_recipe_id = $_POST['character_recipe_id'];
echo '<pre> $character_recipe_id: <br>';
var_dump($character_recipe);
echo '</pre>';

// Character Recipe Table

// Manually typed in sql table name as <option> name
// Manually typed in $selectName as <select> name 


for ($x = 1; $x <= 4; $x++) {
    echo "The number is: $x <br>";
    // Parse Data
    $character_id = $_POST[$x . 'character_recipe_id'];
    $weapon1 = $_POST[$x . 'weapon1'];
    $weapon2 = $_POST[$x . 'weapon2'];
    $weapon3 = $_POST[$x . 'weapon3'];
    $artifact1 = $_POST[$x . 'artifact1'];
    $artifact2 = $_POST[$x . 'artifact2'];
    $artifact3 = $_POST[$x . 'artifact3'];
    $artifact_priority1 = $_POST[$x . 'artifact_priority1'];
    $artifact_priority2 = $_POST[$x . 'artifact_priority2'];
    $artifact_priority3 = $_POST[$x . 'artifact_priority3'];
    $artifact_priority4 = $_POST[$x . 'artifact_priority4'];
    $artifact_priority5 = $_POST[$x . 'artifact_priority5'];
    $artifact_sands = $_POST[$x . 'artifact_sands'];
    $artifact_goblet = $_POST[$x . 'artifact_goblet'];
    $artifact_circlet = $_POST[$x . 'artifact_circlet'];

    // Build Query
    $query = 'INSERT INTO `character_recipes` (`recipe_id`, `character_id`, `weapon1`, `weapon2`, `weapon3`, `artifact1`, `artifact2`, `artifact3`, `artifact_priority1`, `artifact_priority2`, `artifact_priority3`, `artifact_priority4`, `artifact_priority5`, `artifact_sands`, `artifact_goblet`, `artifact_circlet`) ';
    $query .= "VALUES ('$new_recipe_id', '$character_id', '$weapon1', '$weapon2', '$weapon3', '$artifact1', '$artifact2', '$artifact3', '$artifact_priority1', '$artifact_priority2', '$artifact_priority3', '$artifact_priority4', '$artifact_priority5', ' $artifact_sands', '$artifact_goblet', '$artifact_circlet')";

    echo '<pre> $query: <br>';
    var_dump($query);
    echo '</pre>';

    // Excute Query
    $db_connection->query($query);
}

// $weapon2 = $_POST['weapon2'];
// $weapon3 = $_POST['weapon3'];
// $artifact1 = $_POST['artifact1'];
// $artifact2 = $_POST['artifact2'];
// $artifact3 = $_POST['artifact3'];
// $artifact_priority1 = $_POST['artifact_priority1'];
// $artifact_priority2 = $_POST['artifact_priority2'];
// $artifact_priority3 = $_POST['artifact_priority3'];
// $artifact_priority4 = $_POST['artifact_priority4'];
// $artifact_priority5 = $_POST['artifact_priority5'];
// $artifact_sands = $_POST['artifact_sands'];
// $artifact_goblet = $_POST['artifact_goblet'];
// $artifact_circlet = $_POST['artifact_circlet'];
