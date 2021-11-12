<?php
$page_title = 'Sign Up';
include_once __DIR__ . '/header.php';
?>


<div class="container">
    <div class="flex-container">
        <form action="placeholder">
            <div class="form-item">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>

                <label for="email"><b>Email Address</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <div class="flex-container">
                    <input type="submit" value="Sign Up" class="btn">
                </div>

                <a href="login.php">Have an account? Login</a>
            </div>
        </form>
    </div>
</div>


<?php include_once __DIR__ . '/footer.php'; ?>