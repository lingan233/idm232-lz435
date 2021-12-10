<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/database.php';
require_once __DIR__ . '/helper.php';

// require_once $_SERVER['DOCUMENT_ROOT'] . '/idm232/beta/config.php';
// require_once $_SERVER['DOCUMENT_ROOT'] . '/idm232/beta/database.php';
// require_once $_SERVER['DOCUMENT_ROOT'] . '/idm232/beta/helper.php';

if (isset($_POST['submit'])) {
    // Parse Data
    $overview = mysqli_real_escape_string($db_connection, $_POST['overview']);

    echo '<pre>  $_POST: <br>';
    var_dump($_POST);
    echo '</pre>';

    // Build Query
    $query = 'INSERT INTO `team_recipes`(`overview`)';
    $query .= "VALUES ('$overview')";

    echo '<pre> $query: <br>';
    var_dump($query);
    echo '</pre>';

    // Excute Query
    $db_connection->query($query);

    include __DIR__ . '/add-team-process-character.php';
}



    // $selectTest = $_POST['selectTest'];

    // echo '<pre> $selectTest: <br>';
    // var_dump($selectTest);
    // echo '</pre>';