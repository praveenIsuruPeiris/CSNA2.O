<?php
include "./includes/header.php";
$title = "Register Player Injury";
$servername = "localhost";
$username = "name";
$password = "Password";
$dbname = "cnsa";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $player_id = $conn->real_escape_string($_POST['player_id']);
    $game_id = $conn->real_escape_string($_POST['game_id']);
    $injury_details = $conn->real_escape_string($_POST['injury_details']);
    $date = $conn->real_escape_string($_POST['date']);

    $sql = "INSERT INTO InjuryReport (Player_id, Game_id, InjuryDetails, Date) 
            VALUES ('$player_id', '$game_id', '$injury_details', '$date')";

    if ($conn->query($sql) === TRUE) {
        echo "<h2 class='success title'>New injury report created successfully</h2>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register Player Injury</title>

    <style>
        
    </style>
</head>
<body>
    <div class="card">
        <div class="container">
            <h1>Register Player Injury</h1>
            <form action="" method="post">
                <label for="player_id">Player ID:</label>
                <input type="number" id="player_id" name="player_id" required><br>
                
                <label for="game_id">Game ID:</label>
                <input type="number" id="game_id" name="game_id" required><br>
                
                <label for="injury_details">Injury Details:</label>
                <textarea id="injury_details" name="injury_details" required></textarea><br>
                
                <label for="date">Date of Injury:</label>
                <input type="date" id="date" name="date" required><br>
                
                <input type="submit" value="Register">
            </form>
        </div>
    </div>
</body>
</html>
