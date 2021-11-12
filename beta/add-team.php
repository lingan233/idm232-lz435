<?php
$page_title = 'Add Team';
include_once __DIR__ . '/header.php';
?>

<div class="container">
    <div class="add-team">
        <form action="placeholder">
            <h1>Add/Update a Team</h1>
            <h2>Team Members</h2>
            <label for="char">1.</label>
            <select name="char" id="char">
                <option value="empty"></option>
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
            </select>
            <br>
            <label for="char">2.</label>
            <select name="char" id="char">
                <option value="empty"></option>
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
            </select>
            <br>
            <label for="char">3.</label>
            <select name="char" id="char">
                <option value="empty"></option>
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
            </select>
            <br>
            <label for="char">4.</label>
            <select name="char" id="char">
                <option value="empty"></option>
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
            </select>
            <br>

            <h2>Overview</h2>
            <textarea name="overview" id="overview" cols="30" rows="10"></textarea>

            <?php include __DIR__ . '/form-character.php'; ?>
            <?php include __DIR__ . '/form-character.php'; ?>
            <?php include __DIR__ . '/form-character.php'; ?>
            <?php include __DIR__ . '/form-character.php'; ?>

            <div class="flex-container">
                <input type="submit" value="Submit" class="btn" class="add-team-submit">
            </div>

        </form>
    </div>

</div>


<?php include_once __DIR__ . '/footer.php';
