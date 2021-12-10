<?php
include_once __DIR__ . '/header.php';

?>

<div class="search-area">
    <div class="dark-box">
        <h1>Find a Team Recipe</h1>
    </div>
</div>

<div class="img-clip-wrap">
</div>

<h2 class="view-team-title">View Team Recipes</h2>
<div class="view-team-link">
    <a href="team.php">
        <?php
        // //team recipe overview page
        // $sql = "SELECT * From team_recipes ";
        // $result = $db_connection->query($sql);
        // while ($row = mysqli_fetch_array($result)) {
        //     echo "
        //         <table>
        //             <tr>
        //                 <td>" . $row['id'] . "</td>
        //                 <td>" . $row['overview'] . "</td>
        //                 <td>" . $row['date_created'] . "</td>
        //                 <td>" . $row['author_id'] . "</td>
        //             </tr>
        //         <table>";
        // }
        $sql = "SELECT * From character_recipes WHERE recipe_id=1";
        $sql = "SELECT * FROM `character_recipes` WHERE recipe_id=1";
        $result = $db_connection->query($sql);
        echo "<h3>1.</h3>";
        while ($row = mysqli_fetch_array($result)) {
            echo $row['character_id'] . '<br><br>';
        }
        ?>
    </a>
    </div>

    <a href="add-team.php" class="flex-container">
        <button class="btn">
            <p>Add/Update a Team</p>
        </button>
    </a>

    <?php include_once __DIR__ . '/footer.php'; ?>