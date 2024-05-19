<?php
include "./includes/header.php";
$title="Register Player stats";
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
    $goals = $conn->real_escape_string($_POST['goals']);
    $assists = $conn->real_escape_string($_POST['assists']);
    $minutes_played = $conn->real_escape_string($_POST['minutes_played']);
    $penalties = $conn->real_escape_string($_POST['penalties']);
    
    $sql = "INSERT INTO PlayerStats (player_id, game_id, goals, assists, minutes_played, penalties) 
            VALUES ('$player_id', '$game_id', '$goals', '$assists', '$minutes_played', '$penalties')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<h2 class='success title'> New record created successfully </h2>";
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
    <title>Register Player Stats</title>
    <style>
        .card {
            background-color: white;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            border-radius: 5px; 
            padding: 20px;
            margin: auto;
            width: 50%;
        }

        .container {
            padding: 2px 16px;
        }

        label, input, select {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            padding: 10px;
            margin-top: 10px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="container">
            <h1>Register Player Stats</h1>
            <form action="" method="post">
                <label for="player_id">Player ID:</label>
                <input type="number" id="player_id" name="player_id" required><br>
                
                <label for="game_id">Game ID:</label>
                <input type="number" id="game_id" name="game_id" required><br>
                
                <label for="goals">Goals:</label>
                <input type="number" id="goals" name="goals" required><br>
                
                <label for="assists">Assists:</label>
                <input type="number" id="assists" name="assists" required><br>
                
                <label for="minutes_played">Minutes Played:</label>
                <input type="number" id="minutes_played" name="minutes_played" required><br>
                
                <label for="penalties">Penalties:</label>
                <input type="number" id="penalties" name="penalties" required><br>
                
                <input type="submit" value="Register">
            </form>
        </div>
    </div>
</body>
</html>
