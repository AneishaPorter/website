<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PitStop - Teams</title>
    <link rel="stylesheet" href="css/teamInfo.css">
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

    <aside class="vertical-nav-bar">
        <ul>
            <li> <a href="./teams/Alpine.php"> Alpine </a> </li>
            <li> <a href="./teams/AstonMartin.php"> Aston Martin </a> </li>
            <li> <a href="./teams/Ferrari.php"> Ferrari </a> </li>
            <li> <a href="./teams/Haas.php"> Haas </a> </li>
            <li> <a href="./teams/KickSauber.php"> Kick Sauber </a> </li>
            <li> <a href="./teams/McLaren.php"> McLaren </a> </li>
            <li> <a href="./teams/Mercedes.php"> Mercedes </a> </li>
            <li> <a href="./teams/RacingBulls.php"> Racing Bulls </a> </li>
            <li> <a href="./teams/RedBullRacing.php"> Red Bull Racing </a> </li>
            <li> <a href="./teams/Williams.php"> Williams </a> </li>
        </ul>
    </aside>
<!--
<section>
    <div class="wrapper" id="cardContainer"></div>

    <script>
        const cardsData = [
            {
                title: "Alfa Romeo",
                history: "2018-2023",
                currentDrivers: "None",
                image: "./images/AlphaRomeo.png"
            },
            {
                title: "Alpha Tauri",
                history: "2020-2023",
                currentDrivers: "None",
                image: "./images/AlphaTauri.webp"
            },
            {
                title: "Alpine",
                history: "2021-2024",
                currentDrivers: "Pierre Gasly and Jack Doohan",
                image: "./images/AlpineF1.png"
            },
            {
                title: "Aston Martin",
                history: "2021-2024",
                currentDrivers: "Fernando Alonso and Lance Stroll",
                image: "./images/AstonMartin.webp"
            },
            {
                title: "Ferrari",
                history: "1950-2024",
                currentDrivers: "Charles Leclerc and Lewis Hamilton",
                image: "./images/Ferrari.png"
            },
            {
                title: "HAAS",
                history: "2016-2024",
                currentDrivers: "Esteban Ocon and Oliver Bearman",
                image: "./images/HAAS.png"
            },
            {
                title: "McLaren",
                history: "1963-2024",
                currentDrivers: "Lando Norris and Oscar Piastri",
                image: "./images/McLaren.avif"
            },
            {
                title: "Mercedes",
                history: "2010-2024",
                currentDrivers: "George Russell and Kimi Antonelli",
                image: "./images/Mercedes.webp"
            },
            {
                title: "Red Bull Racing",
                history: "2005-2024",
                currentDrivers: "Max Verstappen and Liam Lawson",
                image: "./images/RedBullRacing.png"
            },
            {
                title: "Sauber",
                history: "1993-2024",
                currentDrivers: "Nico Hulkenberg and Gabriel Bortoleto",
                image: "./images/Sauber.png"
            },
            {
                title: "Visa Cash App RB",
                history: "2024-2024",
                currentDrivers: "Yuki Tsunoda, Isack Hadjar",
                image: "./images/VisaCashAppRB.png"
            },
            {
                title: "Williams",
                history: "1978-2024",
                currentDrivers: "Alex Albon and Carlos Sainz",
                image: "./images/Williams.webp"
            }
        ];

        const cardContainer = document.getElementById('cardContainer');

        cardsData.forEach(card => {
            const cardElement = `
            <div class="card">
                <div class="card-inner">
                    <div class="front-page">
                        <img src="${card.image}" alt="${card.title}" class="card-image">
                        <div class="card-info">
                            <h2 class="card-title">${card.title}</h2>
                                <p class="card-subtitle">${card.history}</p>
                        </div>
                    </div>
                    <div class="back-page">
                        <div class="card-content">
                            <h3>${card.title}</h3>
                            <p class="card-description">${card.currentDrivers}</p>
                        </div>
                    </div>
                </div>
            </div>
        `;
            cardContainer.innerHTML += cardElement;
        });
    </script>
    </section>
    -->
</body>
</html>