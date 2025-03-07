<?php

session_start();

// If session is not set, redirect to login page
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
        <link rel="stylesheet" href="css/home.css?v=1.0">
        <title> PitStop - Home </title>
    </head>
    <body>
        <div class="bar">
            <div class="logo">
                <img src= "./images/MainLogoNoBg.png" alt="PitStop Logo">
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
        
    <div class="helmet"> </div>
    <div class="welcome-message"> 

        <?php
        echo "<h1> Welcome, " . htmlspecialchars($_SESSION['username'] . "!");
        ?>
        
        <p>Welcome to PitStop, your one stop journey to understanding the data behind the world of Formula 1.
        Where performance meets precision and every detail fuels the race to victory!
        </p>
        <br>
        <p>Dive into a world of driver profiles, car specifications, race archives, and future events.</p>

    </div>
    </body>
</html>