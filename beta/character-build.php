    <?php
    //character recipe overview page
    //set values
    $weapon1 = "";
    $weapon2 = "";
    $weapon3 = "";
    $artifact1 = "";
    $artifact2 = "";
    $artifact3 = "";
    $artifact_priority1 = "";
    $artifact_priority2 = "";
    $artifact_priority3 = "";
    $artifact_priority4 = "";
    $artifact_priority5 = "";
    $artifact_sands = "";
    $artifact_goblet = "";
    $artifact_circlet = "";

    //connection
    $sql = "SELECT * FROM `character_recipes` WHERE recipe_id=1 and character_id='$character_id'";
    $result = $db_connection->query($sql);
    while ($row = mysqli_fetch_array($result)) {
        $weapon1 = $row['weapon1'];
        $weapon2 = $row['weapon2'];
        $weapon3 = $row['weapon3'];
        $artifact1 = $row['artifact1'];
        $artifact2 = $row['artifact2'];
        $artifact3 = $row['artifact3'];
        $artifact_priority1 = $row['artifact_priority1'];
        $artifact_priority2 = $row['artifact_priority2'];
        $artifact_priority3 = $row['artifact_priority3'];
        $artifact_priority4 = $row['artifact_priority4'];
        $artifact_priority5 = $row['artifact_priority5'];
        $artifact_sands = $row['artifact_sands'];
        $artifact_goblet = $row['artifact_goblet'];
        $artifact_circlet = $row['artifact_circlet'];
    }
    ?>

    <div class="container">
        <div class="character">
            <h2><?php echo $character_id; ?></h2>
            <!-- <div class="team-items">
                <img src="img/anemo.png" alt="anemo sign">
                <img src="img/sucrose.png" alt="character - sucrose">
                <h5>name</h5>
            </div> -->
        </div>
        <h3>Best Weapon</h3>
        <ol>
            <li><?php echo $weapon1; ?></li>
            <li><?php echo $weapon2; ?></li>
            <li><?php echo $weapon3; ?></li>
        </ol>

        <h3>Best Artifact</h3>
        <ol>
            <li><?php echo $artifact1; ?></li>
            <li><?php echo $artifact2; ?></li>
            <li><?php echo $artifact3; ?></li>
        </ol>
        <h3>Artifact Stat Priority</h3>
        <ol>
            <li><?php echo $artifact_priority1; ?></li>
            <li><?php echo $artifact_priority2; ?></li>
            <li><?php echo $artifact_priority3; ?></li>
            <li><?php echo $artifact_priority4; ?></li>
            <li><?php echo $artifact_priority5; ?></li>
        </ol>
        <h3>Recommended Main Stats for Artifact Parts</h3>
        <ol>
            <li><?php echo $artifact_sands; ?></li>
            <li><?php echo $artifact_goblet; ?></li>
            <li><?php echo $artifact_circlet; ?></li>
        </ol>



        <?php
        // //character recipe overview page
        // $sql = "SELECT * From character_recipes ";
        // $result = $db_connection->query($sql);
        // while ($row = mysqli_fetch_array($result)) {
        //     echo "
        //     <table>
        //         <tr>
        //             <td>" . $row['character_id'] . "</td>
        //             <td>" . $row['weapon1'] . "</td>
        //             <td>" . $row['weapon2'] . "</td>
        //             <td>" . $row['weapon3'] . "</td>
        //         </tr>
        //     <table>";
        // }
        ?>

    </div>
    </div>