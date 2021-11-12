<?php
$page_title = 'Genshin Team Recipe';
include_once __DIR__ . '/header.php';
?>

        <div class="search-area">
            <div class="dark-box">
                <h1>Find a Team Recipe</h1>
                <div class="search-bar">
                    <input type="text" placeholder="Enter character names..." class="search-input">
                    <button type="submit" class="search-btn"></button>
                </div>

            </div>
        </div>

        <div class="img-clip-wrap">
        </div>

        <div>
            <div class="team-container">
                <a href="team.php" class="team-overview">
                    <div class="team-items">
                        <img src="img/anemo.png" alt="anemo sign">
                        <img src="img/sucrose.png" alt="character - sucrose">
                        <h5>Sucrose</h5>
                    </div>
                    <div class="team-items">
                        <img src="img/anemo.png" alt="anemo sign">
                        <img src="img/sucrose.png" alt="character - sucrose">
                        <h5>Sucrose</h5>
                    </div>
                    <div class="team-items">
                        <img src="img/anemo.png" alt="anemo sign">
                        <img src="img/sucrose.png" alt="character - sucrose">
                        <h5>Sucrose</h5>
                    </div>
                    <div class="team-items">
                        <img src="img/anemo.png" alt="anemo sign">
                        <img src="img/sucrose.png" alt="character - sucrose">
                        <h5>Sucrose</h5>
                    </div>
                </a>
            </div>
        </div>


        <a href="add-team.php" class="flex-container">
            <button class="btn">
                <p>Add/Update a Team</p>
            </button>
        </a>

<?php include_once __DIR__ . '/footer.php'; ?>
