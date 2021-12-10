<?php
if (isset($_POST['submit'])) {
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
    // check if the username and password is valid
    $name = mysqli_real_escape_string($db_connection, $_POST['name']);
    $password = mysqli_real_escape_string($db_connection, $_POST['password']);

    // Build Query
    $query = 'SELECT * ';
    $query .= 'FROM users ';
    $query .= "WHERE name='{$name}'";

    echo '<pre>';
    var_dump($query);
    echo '</pre>';

    $results = mysqli_query($db_connection, $query);

    if ($results && $results->num_rows > 0) {
        // Get row from results and assign to $user variable;
        $user = mysqli_fetch_assoc($results);
        // Verify that the submitted password matches the password from the users db
        if (password_verify($password, $user['password'])) {
            // name + password exist

            // Create a user array in the SESSION variable and assign values to it
            $_SESSION['user'] = [
                'id' => $user['id'],
                'name' => $user['name'],
            ];
            echo 'successfully logged in';
            redirectTo('/index.php');
        } else {
            // Correct email but wrong password
            redirectTo('/auth/login.php?error=Email or Password doest not exist.');
        }
    } else {
        // Wrong Email + Password
        redirectTo('/auth/login.php?error=Email or Password doest not exist.');
    }

    // get form data
    // get that email and check the database if they exist
    // redirect to the admin
} else {
    echo 'is not submitted';
}
