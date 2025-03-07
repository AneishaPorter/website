<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PitStop - Drivers </title>
    <link rel="stylesheet" href="./css/drivers.css">
</head>

<body>
    <div class="bar">
        <div class="logo">
            <img src="./images/MainLogoNoBg.png" alt="PitStop Logo">
            <nav class="navbar">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="drivers.php">Drivers</a></li>
                    <li><a href="teams.php">Teams</a></li>
                    <li><a href="calendar.php">Race Calendar</a></li>
                    <li><a href="lastSeason.php">Last Season</a></li>
                    <li><a href="compare.php">Compare</a></li>
                    <li><a href="forums.php">Forums</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
            <div class="search-bar">
                <input type="text" placeholder="Search...">
            </div>
        </div>
    </div>
<!--
    <aside class="vertical-nav-bar">
        <ul>
            <li> <a href="Williams.php"> Alex Albon </a> </li>
            <li> <a href="AstonMartin.php"> Fernando Alonso </a> </li>
            <li> <a href="Mercedes.php"> Andrea Kimi Antonelli </a> </li>
            <li> <a href="Haas.php"> Oliver Bearman </a> </li>
            <li> <a href="KickSauber.php"> Gabriel Bortoleto </a> </li>
            <li> <a href="Alpine.php"> Jack Doohan </a> </li>
            <li> <a href="Alpine.php"> Pierre Gasly </a> </li>
            <li> <a href="RacingBulls.php"> Isack Hadjar </a> </li>
            <li> <a href="Ferrari.php"> Lewis Hamilton </a> </li>
            <li> <a href="KickSauber.php"> Nico Hulkenberg </a> </li>
            <li> <a href="RedBullRacing.php"> Liam Lawson </a> </li>
            <li> <a href="Ferrari.php"> Charles Leclerc </a> </li>
            <li> <a href="McLaren.php"> Lando Norris </a> </li>
            <li> <a href="Haas.php"> Esteban Ocon </a> </li>
            <li> <a href="McLaren.php"> Oscar Piastri </a> </li>
            <li> <a href="Mercedes.php"> George Russell </a> </li>
            <li> <a href="Williams.php"> Carlos Sainz </a> </li>
            <li> <a href="AstonMartin.php"> Lance Stroll </a> </li>
            <li> <a href="RacingBulls.php"> Yuki Tsunoda </a> </li>
            <li> <a href="RedBullRacing.php"> Max Verstappen </a> </li>
        </ul>
    </aside>
-->
    <div class="vertical-nav-bar">
        <button id="toggle-btn"> ☰ </button>
        <ul>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn"> Alpine </a>
                <div class="dropdown-content">
                    <a href="./drivers/Gasly.php"> Pierre Gasly </a>
                    <a href="./drivers/Doohan.php"> Jack Doohan </a>
                </div>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn"> Aston Martin </a>
                <div class="dropdown-content">
                    <a href="./drivers/Alonso.php"> Fernando Alonso </a>
                    <a href="./drivers/Stroll.php"> Lance Stroll </a>
                </div>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn"> Ferrari </a>
                <div class="dropdown-content">
                    <a href="./drivers/Leclerc.php"> Charles Leclerc </a>
                    <a href="./drivers/Hamilton.php"> Lewis Hamilton </a>
                </div>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn"> Haas </a>
                <div class="dropdown-content">
                    <a href="./drivers/Ocon.php"> Esteban Ocon </a>
                    <a href="./drivers/Bearman.php"> Oliver Bearman </a>
                </div>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn"> Kick Sauber </a>
                <div class="dropdown-content">
                    <a href="./drivers/Hulkenberg.php"> Nico Hulkenberg </a>
                    <a href="./drivers/Bortoleto.php"> Gabriel Bortoleto </a>
                </div>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn"> McLaren </a>
                <div class="dropdown-content">
                    <a href="./drivers/Norris.php"> Lando Norris </a>
                    <a href="./drivers/Piastri.php"> Oscar Piastri </a>
                </div>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn"> Mercedes </a>
                <div class="dropdown-content">
                    <a href="./drivers/Russell.php"> George Russell </a>
                    <a href="./drivers/Antonelli.php"> Andrea Kimi Antonelli </a>
                </div>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn"> Racing Bulls </a>
                <div class="dropdown-content">
                    <a href="./drivers/Tsunoda.php"> Yuki Tsunoda </a>
                    <a href="./drivers/Hadjar.php"> Isack Hadjar </a>
                </div>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn"> Red Bull Racing </a>
                <div class="dropdown-content">
                    <a href="./drivers/Verstappen.php"> Max Verstappen </a>
                    <a href="./drivers/Lawson.php"> Liam Lawson </a>
                </div>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn"> Williams </a>
                <div class="dropdown-content">
                    <a href="./drivers/Albon.php"> Alex Albon </a>
                    <a href="./drivers/Sainz.php"> Carlos Sainz </a>
                </div>
            </li>
        </ul>
    </div>

    <script>
        document.getElementById("toggle-btn").addEventListener("click", function() {
            document.querySelector(".vertical-nav-bar").classList.toggle("hidden");
        });

    </script>
</body>

</html>