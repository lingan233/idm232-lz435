<?php
$page_title = 'Login';
include_once __DIR__ . '/header.php';


if (isset($_POST['submit'])) {
    // check if the username and password is valid
    $email = mysqli_real_escape_string($db_connection, $_POST['email']);
    $password = mysqli_real_escape_string($db_connection, $_POST['password']);

    // Build Query
    $query = 'SELECT * ';
    $query .= 'FROM users ';
    $query .= "WHERE email='{$email}'";

    $results = mysqli_query($db_connection, $query);

    if ($results && $results->num_rows > 0) {
        // Get row from results and assign to $user variable;
        $user = mysqli_fetch_assoc($results);
        // Verify that the submitted password matches the password from the users db
        if (password_verify($password, $user['password'])) {
            // email + password exist
    
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
}

?>

<div class="container">
    <div class="flex-container">
        <form action="index.php" method="post">
            <div class="form-item">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <div class="flex-container">
                    <input type="submit" value="Login" class="btn">
                </div> 
                <a href="sign-up.php">Create an Account</a>
            </div>
        </form>
    </div>


</div>


<?php include_once __DIR__ . '/footer.php'; ?>