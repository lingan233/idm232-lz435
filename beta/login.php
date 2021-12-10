<?php
$page_title = 'Login';
include_once __DIR__ . '/header.php';

?>

<div class="container">
    <div class="flex-container">
        <form action="login-process.php" method="POST">
            <div class="form-item">
                <label for="name"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="name" required>

                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>

                <div class="flex-container">
                    <input type="submit" name="submit" value="Login" class="btn">
                </div> 
                <a href="sign-up.php">Create an Account</a>
            </div>
        </form>
    </div>


</div>


<?php include_once __DIR__ . '/footer.php'; ?>