<?php
$page_title = 'Login';
include_once __DIR__ . '/header.php';
?>

<div class="container">
    <div class="flex-container">
        <form action="placeholder">
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