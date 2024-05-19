<?php
include "./includes/header.php";
$title = "Register Player to Roster";
$servername = "localhost";
$username = "name";
$password = "Password";
$dbname = "cnsa";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $team_id = $conn->real_escape_string($_POST['team_id']);
    $seasonNo = $conn->real_escape_string($_POST['seasonNo']);
    $player_id = $conn->real_escape_string($_POST['player_id']);

    $sql = "INSERT INTO Roster (Team_id, SeasonNo, player_id) 
            VALUES ('$team_id', '$seasonNo', '$player_id')";

    if ($conn->query($sql) === TRUE) {
        echo "<h2 class='success'>Player added to roster successfully</h2>";
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
    <title>Register Player to Roster</title>
    <style>     
    </style>
</head>
<body>
    <div class="card">
        <div class="container">
            <h1>Register Player to Roster</h1>
            <form action="" method="post">
                <label for="team_id">Team ID:</label>
                <input type="number" id="team_id" name="team_id" required><br>

                <label for="seasonNo">Season Number:</label>
                <input type="number" id="seasonNo" name="seasonNo" required><br>
                
                <label for="player_id">Player ID:</label>
                <input type="number" id="player_id" name="player_id" required><br>
                
                <input type="submit" value="Register">
            </form>
        </div>
    </div>
</body>
</html>
