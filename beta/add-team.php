<?php
$page_title = 'Add Team';
include_once __DIR__ . '/header.php';
?>
<!-- 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="main.js"></script> -->

<form action="/add-team-process.php" method="POST">
    <div class="add-team">
        <div class="container">
            <h1>Add/Update a Team</h1>
            <h2>Team Members</h2>
            <label for="char">1.</label>
            <?php $optionTable = 'genshin_characters'; ?>

            <?php $selectName = '1character_recipe_id'; ?>
            <?php include __DIR__ . '/dropdown-select.php'; ?>
            <br>

            <?php $selectName = '2character_recipe_id'; ?>
            <label for="char">2.</label>
            <?php include __DIR__ . '/dropdown-select.php'; ?>
            <br>

            <?php $selectName = '3character_recipe_id'; ?>
            <label for="char">3.</label>
            <?php include __DIR__ . '/dropdown-select.php'; ?>
            <br>

            <?php $selectName = '4character_recipe_id'; ?>
            <label for="char">4.</label>
            <?php include __DIR__ . '/dropdown-select.php'; ?>
            <br>

            <!-- <select name="selectTest" id="abc">
                <option value="A">A</option>
                <option value="value of b">B</option>
                <option value="C">C</option>
            </select> -->


            <h2>Overview</h2>
            <textarea name="overview" id="overview" cols="30" rows="10"></textarea>
        </div>

        <div class="container">
            <?php $character_order = '1'; ?>
            <?php include __DIR__ . '/character-build-select.php'; ?>
        </div>

        <div class="container">
            <?php $character_order = '2'; ?>
            <?php include __DIR__ . '/character-build-select.php'; ?>
        </div>

        <div class="container">
            <?php $character_order = '3'; ?>
            <?php include __DIR__ . '/character-build-select.php'; ?>
        </div>

        <div class="container">
            <?php $character_order = '4'; ?>
            <?php include __DIR__ . '/character-build-select.php'; ?>
            <br>
            <div class="flex-container">
                <input type="submit" name="submit" value="Submit" class="btn" class="add-team-submit">
            </div>
        </div>

    </div>

    </div>
</form>

<?php include_once __DIR__ . '/footer.php';
