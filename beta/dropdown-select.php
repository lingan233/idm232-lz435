<?php

if (isset($optionTable)) {
    $sql = "SELECT * From $optionTable ";
    $result = $db_connection->query($sql);
    while ($row = mysqli_fetch_array($result)) {
        $rows[] = $row['name'];
    }
}

// if($result = mysqli_query($db_connection, $sql)) {
//     if(mysqli_num_rows($result) > 0) {
//         while($row = mysqli_fetch_array($result)){
//             $db_selected = $row['name'];
//         }
//     }
// }

echo "<select name='$selectName'>";
foreach ($rows as $row) {
    echo "<option value='$row' name='$optionTable' id='character1'>$row</option>";
    // if($db_selected == $row) {
    //     echo "<option selected='selected' value='$row'>$row</option>";
    // }
    // else {
    //     echo "<option value='$row'>$row</option>";
    // }
        
}
echo "</select>";

// echo '<pre> $selectName: <br>';
// var_dump($selectName);
// echo '</pre>';

// echo '<pre> $row: <br>';
// var_dump($row);
// echo '</pre>';

// echo '<pre> $rows: <br>';
// var_dump($rows);
// echo '</pre>';

unset($rows);
