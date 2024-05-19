<?php
include "./includes/header.php";
$title = "Register Player Scholarship";
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
    $amount = $conn->real_escape_string($_POST['amount']);
    $scholarship_terms = $conn->real_escape_string($_POST['scholarship_terms']);
    $school_id = $conn->real_escape_string($_POST['school_id']);

    $sql = "INSERT INTO Scholarship (Player_id, Amount, ScholarshipTerms, School_id) 
            VALUES ('$player_id', '$amount', '$scholarship_terms', '$school_id')";

    if ($conn->query($sql) === TRUE) {
        echo "<h2 class='success title'>New scholarship record created successfully</h2>";
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
    <title>Register Player Scholarship</title>

    <style>

    </style>
</head>
<body>
    <div class="card">
        <div class="container">
            <h1>Register Player Scholarship</h1>
            <form action="" method="post">
                <label for="player_id">Player ID:</label>
                <input type="number" id="player_id" name="player_id" required><br>
                
                <label for="amount">Scholarship Amount:</label>
                <input type="number" id="amount" name="amount" step="0.01" required><br>
                
                <label for="scholarship_terms">Scholarship Terms:</label>
                <textarea id="scholarship_terms" name="scholarship_terms" required></textarea><br>
                
                <label for="school_id">School ID:</label>
                <input type="number" id="school_id" name="school_id" required><br>
                
                
                <input type="submit" value="Register">
            </form>
        </div>
    </div>
</body>
</html>
