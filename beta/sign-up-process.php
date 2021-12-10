<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/database.php';
require_once __DIR__ . '/helper.php';

// require_once $_SERVER['DOCUMENT_ROOT'] . '/idm232/beta/config.php';
// require_once $_SERVER['DOCUMENT_ROOT'] . '/idm232/beta/database.php';
// require_once $_SERVER['DOCUMENT_ROOT'] . '/idm232/beta/helper.php';

if (isset($_POST['submit'])) {
    
    // Parse Data
    $name = mysqli_real_escape_string($db_connection, $_POST['name']);
    $email = mysqli_real_escape_string($db_connection, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';

    // Build Query
    $query = 'INSERT INTO `my_users`(`name`, `email`, `password`)';
    $query .= "VALUES ('$name', '$email', '$password')";
 
    echo '<pre>';
    var_dump($query);
    echo '</pre>';

    // Excute Query
    $db_connection->query($query);
}



/**
 * Let's simply look at the information that was passed.
 * The form data has been posted to our processing page in an
 * associative array, we'll use `print_r` to take a look at that
 * array and the values that came through. Notice that the form
 * data was not passed in the URL like with $_GET.
 */
// print_r($_POST);

// // Let's extract each of the values and assign them to variables.
// $uname = $_POST['uname'];
// $psw = $_POST['psw'];


// INSERT INTO `my_users`(`id`, `name`, `email`, `phone`, `password`, `date_created`) 
// VALUES ('5', 'abc', 'abc@gmail.com', '9175555555', 'asdfsa', '2021-11-01 10:10:10')
