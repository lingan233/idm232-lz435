<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/helper.php';

if (isset($_POST['submit'])) {
    // Parse Data
    $name = mysqli_real_escape_string($db_connection, $_POST['name']);
    $email = mysqli_real_escape_string($db_connection, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $current_date = getFormattedDateTime();

    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';

    // Build Query
    $query = 'INSERT INTO `users`(`id`, `name`, `email`, `phone`, `password`, `date_created`)';
    // $query .= "VALUES ('9', '$name', '$email', '123121', '$password', '$current_date')";
    $query .= "VALUES ('15', '$name', '$email', '1231rsdfds21', '$password', '$current_date')";
 
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


// INSERT INTO `users`(`id`, `name`, `email`, `phone`, `password`, `date_created`) 
// VALUES ('5', 'abc', 'abc@gmail.com', '9175555555', 'asdfsa', '2021-11-01 10:10:10')
