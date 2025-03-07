<?php
include 'dbconfig.php';
if (isset($_GET['location'])) {
    $grand_prix_name = $_GET['location'];

    // Prepare query for grand prix details (using grand_prix_name column)
    $query_grand_prix_details = "SELECT * FROM grand_prix WHERE location = ?";
    $stmt = $conn->prepare($query_grand_prix_details);
    $stmt->bind_param("s", $grand_prix_name); 
    $stmt->execute();
    $result_grand_prix = $stmt->get_result();

    if ($result_grand_prix->num_rows > 0) {
        $grand_prix_row = $result_grand_prix->fetch_assoc();
    } else {
        echo "No details found for this Grand Prix.";
        exit;
    }

    // Query for race winner
    $query_race_winner = "SELECT * FROM winner WHERE location = ? ORDER BY date ASC";
    $stmt_winner = $conn->prepare($query_race_winner);
    $stmt_winner->bind_param("s", $grand_prix_row['location']);
    $stmt_winner->execute();
    $result_winner = $stmt_winner->get_result();

    $winners = [];
    if ($result_winner->num_rows > 0) {
        while ($winner_row = $result_winner->fetch_assoc()) {
            $winners[] = $winner_row;
        }
    }
} else {
    echo "Grand Prix not specified.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PitStop - Grand Prix Details</title>
    <link rel="stylesheet" href="./css/grandPrixDetails.css?v=1.0">
</head>
<body>
    <div class="bar">
        <div class="logo">
            <img src="./images/mainLogo.png" alt="PitStop Logo">
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

    <h1>Grand Prix Details</h1>
    <div class="grand_prix_details">
        <p><strong>Name: </strong><?php echo htmlspecialchars($grand_prix_row['grand_prix_name']); ?></p>
        <p><strong>Location: </strong><?php echo htmlspecialchars($grand_prix_row['location']); ?></p>
        <p><strong>Previous winner at this Grand Prix: </strong>
            <?php 
            if (count($winners) > 0) {
                echo "Driver: " . htmlspecialchars($winners[0]['driver_name']); 
                echo " | Team: " . htmlspecialchars($winners[0]['team_name']);
                echo " | Laps: " . htmlspecialchars($winners[0]['number_of_laps']);
                echo " | Time: " . htmlspecialchars($winners[0]['race_time']);
                echo " | Date: " . htmlspecialchars($winners[0]['date']);
            } else {
                echo "No winner available.";
            }
            ?>
        </p>
        <table class="centered-table">
            <thead>
                <tr>
                    <th> Driver </th>
                    <th> Team </th>
                    <th> No. Laps </th>
                    <th> Race Time </th>
                    <th> Date </th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (count($winners) > 0) {
                    foreach ($winners as $winner_row) {

                        
                        echo "<tr>
                                <td> {$winner_row['driver_name']} </td>
                                <td> {$winner_row['team_name']} </td>
                                <td> {$winner_row['number_of_laps']} </td>
                                <td> {$winner_row['race_time']} </td>
                                <td> {$winner_row['date']} </td>
                            </tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>