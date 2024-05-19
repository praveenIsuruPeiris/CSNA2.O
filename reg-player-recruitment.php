<?php
include "./includes/header.php";
$title = "Register Player Recruitment Incident";
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
    $description = $conn->real_escape_string($_POST['description']);
    $date = $conn->real_escape_string($_POST['date']);

    $sql = "INSERT INTO RecruitmentIncident (player_id, Description, Date) 
            VALUES ('$player_id', '$description', '$date')";

    if ($conn->query($sql) === TRUE) {
        echo "<h2 class='success title'>New recruitment incident recorded successfully</h2>";
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
    <title>Register Player Recruitment Incident</title>
    <style>     
    </style>
</head>
<body>
    <div class="card">
        <div class="container">
            <h1>Register Player Recruitment Incident</h1>
            <form action="" method="post">
                <label for="player_id">Player ID:</label>
                <input type="number" id="player_id" name="player_id" required><br>
                
                <label for="description">Incident Description:</label>
                <textarea id="description" name="description" required></textarea><br>
                
                <label for="date">Date of Incident:</label>
                <input type="date" id="date" name="date" required><br>
                
                <input type="submit" value="Register">
            </form>
        </div>
    </div>
</body>
</html>
