<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PitStop - Calendar</title>
    <link rel="stylesheet" href="css/calendar.css?v=1.0">
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

    <div class="wrapper" id="cardContainer"></div>

    <script>
        const cardsData = [
            {
                title: "Australia",
                subtitle: "Albert Park Circuit",
                description: "April 04-06, 2025, Australian Grand Prix",
                image: "./images/calendar/Australia.jpg",
                location: "Australia"
            },
            {
                title: "China",
                subtitle: "Shanghai International Circuit",
                description: "March 14-16, 2025, Chinese Grand Prix",
                image: "./images/calendar/China.jpg",
                location: "China"
            },
            {
                title: "Japan",
                subtitle: "Suzuka Circuit",
                description: "March 21-23, 2025, Japanese Grand Prix",
                image: "./images/calendar/Japan.jpg",
                location: "Japan"
            },
            {
                title: "Bahrain",
                subtitle: "Bahrain International Circuit",
                description: "April 11-13, 2025, Bahrain Grand Prix",
                image: "./images/calendar/Bahrain.jpg",
                location: "Bahrain"
            },
            {
                title: "Saudi Arabia",
                subtitle: "Jeddah Corniche Circuit",
                description: "April 18-20, 2025, Saudi Arabian Grand Prix",
                image: "./images/calendar/Saudi.jpg",
                location: "Saudi Arabia"
            },
            {
                title: "Miami",
                subtitle: "Miami International Autodrome",
                description: "May 02-04, 2025, Miami Grand Prix",
                image: "./images/calendar/Miami.jpg",
                location: "Miami"
            },
            {
                title: "Emilia-Romagna",
                subtitle: "Autodromo Internazionale Enzo e Dino Ferrari",
                description: "May 16-18, 2025, Emilia-Romagna Grand Prix",
                image: "./images/calendar/Emilia.jpg",
                location: "Emilia-Romagna"
            },
            {
                title: "Monaco",
                subtitle: "Circuit de Monaco",
                description: "May 23-25, 2025, Monaco Grand Prix",
                image: "./images/calendar/Monaco.jpg",
                location: "Monaco"
            },
            {
                title: "Spain",
                subtitle: "Circuit de Barcelona-Catalunya",
                description: "May-June 30-01, 2025, Spanish Grand Prix",
                image: "./images/calendar/Spain.jpg",
                location: "Spain"
            },
            {
                title: "Canada",
                subtitle: "Circuit Gilles-Villeneuve",
                description: "June 13-15, 2025, Canadian Grand Prix",
                image: "./images/calendar/Canada.jpg",
                location: "Canada"
            },
            {
                title: "Austria",
                subtitle: "Red Bull Ring",
                description: "June 27-29, 2025, Austrian Grand Prix",
                image: "./images/calendar/Austria.jpg",
                location: "Austria"
            },
            {
                title: "Great Britain",
                subtitle: "Silverstone Ciruit",
                description: "July 04-06, 2025, British Grand Prix",
                image: "./images/calendar/UK.jpg",
                location: "Great Britain"
            },
            {
                title: "Belgium",
                subtitle: "Circuit de Spa-Francorchamps",
                description: "July 25-27, 2025, Belgian Grand Prix",
                image: "./images/calendar/Spa.jpg",
                location: "Belgium"
            },
            {
                title: "Hungary",
                subtitle: "Hungaroring",
                description: "August 01-03, 2025, Hungarian Grand Prix",
                image: "./images/calendar/Hungary.jpg",
                location: "Hungary"
            },
            {
                title: "Netherlands",
                subtitle: "Circuit Zandvoort",
                description: "August 29-31, 2025, Dutch Grand Prix",
                image: "./images/calendar/Netherlands.jpg",
                location: "Netherlands"
            },
            {
                title: "Italy",
                subtitle: "Autodromo Nazionale Monza",
                description: "September 05-07, 2025, Italian Grand Prix",
                image: "./images/calendar/Monza.jpg",
                location: "Italy"
            },
            {
                title: "Azerbaijan",
                subtitle: "Baku City Circuit",
                description: "September 19-21, 2025, Azerbaijan Grand Prix",
                image: "./images/calendar/Baku.webp",
                location: "Azerbaijan"
            },
            {
                title: "Singapore",
                subtitle: "Marina Bay Street Circuit",
                description: "October 03-05, 2025, Singapore Grand Prix",
                image: "./images/calendar/Singapore.jpg",
                location: "Singapore"
            },
            {
                title: "United States",
                subtitle: "Circuit of the Americas",
                description: "October 17-19, 2025, United States Grand Prix",
                image: "./images/calendar/US.jpg",
                location: "United States"
            },
            {
                title: "Mexico",
                subtitle: "Autodromo Hermanos Rodriguez",
                description: "October 24-26, 2025, Mexican Grand Prix",
                image: "./images/calendar/Mexico.jpg",
                location: "Mexico"
            },
            {
                title: "Brazil",
                subtitle: "Autodromo Jose Carlos Pace",
                description: "November 07-09, 2025, Sao Paul Grand Prix",
                image: "./images/calendar/Brazil.jpg",
                location: "Brazil"
            },
            {
                title: "Las Vegas",
                subtitle: "Las Vegas Strip Circuit",
                description: "November 20-22, 2025, Las Vegas Grand Prix",
                image: "./images/calendar/LA.jpg",
                location: "Las Vegas"
            },
            {
                title: "Qatar",
                subtitle: "Lusail International Circuit",
                description: "November 28-30, 2025, Qatar Grand Prix",
                image: "./images/calendar/Qatar.jpg",
                location: "Qatar"
            },
            {
                title: "Abu Dhabi",
                subtitle: "Yas Marina Circuit",
                description: "December 05-07, 2025, Abu Dhabi Grand Prix",
                image: "./images/calendar/AbuDhabi.jpg",
                location: "Abu Dhabi"
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
                    <p class="card-subtitle">${card.subtitle}</p>
                </div>
            </div>
            <div class="back-page">
                
                <div class="card-content">
                    <h3>${card.title}</h3>
                    <p class="card-description">${card.description}</p>
                    <a href="grandPrixDetails.php?location=${card.location}" class="prix-details">
                        <button class="card-button">Explore More</button>
                    </a>

                </div>
            </div>
        </div>
    </div>
`;
            cardContainer.innerHTML += cardElement;
        });
    </script>
</body>
</html>    