<?php
$page_title = 'Sign Up';
include_once __DIR__ . '/header.php';
?>


<div class="container">
    <div class="flex-container">
        <form action="/sign-up-process.php" method="POST">
            <div class="form-item">
                <label for="name"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="name" required>

                <label for="email"><b>Email Address</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>

                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>

                <div class="flex-container">
                    <input type="submit" name="submit" value="Sign Up" class="btn">
                </div>

                <a href="login.php">Have an account? Login</a>
            </div>
        </form>
    </div>
</div>


<?php include_once __DIR__ . '/footer.php'; ?>