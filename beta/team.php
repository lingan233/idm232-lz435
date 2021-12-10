<?php
$page_title = 'Team';
include_once __DIR__ . '/header.php';
// include __DIR__ . '/team-overview.php';
?>

<?php
// //team recipe overview page
// $sql = "SELECT * From team_recipes ";
// $result = $db_connection->query($sql);
// while ($row = mysqli_fetch_array($result)) {
//     echo "
//         <table>
//             <tr>
//                 <td>" . $row['id'] . "</td>
//                 <td>" . $row['overview'] . "</td>
//                 <td>" . $row['date_created'] . "</td>
//                 <td>" . $row['author_id'] . "</td>
//             </tr>
//         <table>";
// }
?>


<!-- calling individual value from the database -->

<?php
//team recipe overview page
//set values
$id = "";
$overview = "";
$date_created = "";
$author_id = "";
$character_ids = [];

//connection
$sql = "SELECT * FROM `team_recipes` WHERE id=1";
$result = $db_connection->query($sql);
while ($row = mysqli_fetch_array($result)) {
    $id = $row['id'];
    $overview = $row['overview'];
    $date_created = $row['date_created'];
    $author_id = $row['author_id'];
}
?>

<div>
    <p>Date Created: <?php echo $date_created; ?></p>
    <h2>Summary</h2>
    <p><?php echo $overview; ?></p>
</div>

<h2>Character Build</h2>

<?php
//connection
$sql = "SELECT * FROM `character_recipes` WHERE recipe_id=1";
$result = $db_connection->query($sql);
while ($row = mysqli_fetch_array($result)) {
    array_push($character_ids, $row['character_id']);
}

foreach ($character_ids as $character_id) {
    include __DIR__ . '/character-build.php';
}
?>



<?php include_once __DIR__ . '/footer.php'; ?>