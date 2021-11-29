<?php

if (isset($selectTable)) {
    $sql = "SELECT * From $selectTable ";
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

echo "<select>";
foreach ($rows as $row) {
    echo "<option value='$row'>$row</option>";
    // if($db_selected == $row) {
    //     echo "<option selected='selected' value='$row'>$row</option>";
    // }
    // else {
    //     echo "<option value='$row'>$row</option>";
    // }
    unset ($rows);
}
echo "</select>";
