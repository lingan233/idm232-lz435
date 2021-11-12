<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genshin Team Recipe - Add/Update a Team</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <div class="wrapper">
        <div class="nav">
            <div class="nav-items">

                <a href="placeholder">
                    <img src="img/menu.png" alt="menu icon">
                </a>
                <a href="index.php" class="nav-text">
                    <h4>
                        Genshin <br> Team Recipe
                    </h4>
                </a>
            </div>
            <div class="nav-items">
                <a href="placeholder">
                    <img src="img/search.png" alt="search icon">
                </a>

                <a href="login.php">
                    <img src="img/account.png" alt="account icon">
                </a>
            </div>
        </div>
        <div class="container">
            <!-- <div class="add-team">
                <h2>Add/Update a Team</h2>
                <h3>Team Members</h3>
                <button class="btn">
                    <p>Next</p>
                </button>
                <h2>Character #1 - Name</h2>
                <h3>Best Weapon</h3>
                <h3>Best Artifact</h3>
                <h3>Artifact Stat Priority</h3>
                <h3>Recommended Main Stats for Artifact Parts</h3>
                <button class="btn">S
                    <p>Next</p>
                </button>
            </div> -->

            <form action="placeholder">
                <h1>Add/Update a Team</h1>
                <h3>Team Members</h3>
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

                <h3>Overview</h3>
                <input type="text" id="overview">

                <h2>Character #1</h2>
                <h3>Best Weapons</h3>
                <label for="weapon1">1st</label>
                <select name="weapon1" id="weapon1">
                    <option value="empty"></option>
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                </select>
                <br>
                <label for="weapon2">2nd</label>
                <select name="weapon2" id="weapon2">
                    <option value="empty"></option>
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                </select>
                <br>
                <label for="weapon3">3rd</label>
                <select name="weapon3" id="weapon3">
                    <option value="empty"></option>
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                </select>
                <h3>Best Artifact</h3>
                <label for="artifact1">1st</label>
                <select name="artifact1" id="artifact1">
                    <option value="empty"></option>
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                </select>
                <br>
                <label for="artifact2">2nd</label>
                <select name="artifact2" id="artifact2">
                    <option value="empty"></option>
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                </select>
                <br>
                <label for="artifact3">3rd</label>
                <select name="artifact3" id="artifact3">
                    <option value="empty"></option>
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                </select>

                <h3>Artifact Stat Priority</h3>
                <label for="artifact_priority1">1.</label>
                <select name="artifact_priority1" id="artifact_priority1">
                    <option value="empty"></option>
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                </select>
                <br>
                <label for="artifact_priority2">2.</label>
                <select name="artifact_priority2" id="artifact_priority2">
                    <option value="empty"></option>
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                </select>
                <br>
                <label for="artifact_priority3">3.</label>
                <select name="artifact_priority3" id="artifact_priority3">
                    <option value="empty"></option>
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                </select>
                <br>
                <label for="artifact_priority4">4.</label>
                <select name="artifact_priority4" id="artifact_priority4">
                    <option value="empty"></option>
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                </select>
                <h3>Recommended Main Stats for Artifact Parts</h3>
                <label for="artifact_sands">Sands of Eon</label>
                <select name="artifact_sands" id="artifact_sands">
                    <option value="empty"></option>
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                </select>
                <br>
                <label for="artifact_goblet">Goblet of Eonothem</label>
                <select name="artifact_goblet" id="artifact_goblet">
                    <option value="empty"></option>
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                </select>
                <br>
                <label for="artifact_circlet">Circlet of Logos</label>
                <select name="artifact_circlet" id="artifact_circlet">
                    <option value="empty"></option>
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                </select>

                <input type="submit" value="Submit" class="btn">
            </form>
        </div>
        <footer>
            <a href="placeholder">
                <h5>About Us</h5>
            </a>
            <a href="placeholder">
                <h5>Contact Us</h5>
            </a>
        </footer>
    </div>
    <script src="main.js"></script>
</body>

</html>