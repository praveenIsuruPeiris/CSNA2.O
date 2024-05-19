<?php
$title = "Player Stats";
include "./includes/header.php";
if (!isset($_SESSION['user'])) {
    redirect("./login.php");
}
?>

<?php
$servername = "localhost";
$username = "name";
$password = "Password";
$dbname = "cnsa";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['player_id']) && ctype_digit($_GET['player_id'])) {
    $player_id = $_GET['player_id'];

    if ($stmt = $conn->prepare("SELECT player.name, PlayerStats.game_id, PlayerStats.goals, PlayerStats.assists, PlayerStats.minutes_played, PlayerStats.penalties FROM PlayerStats INNER JOIN player ON PlayerStats.player_id = player.player_id WHERE PlayerStats.player_id = ?")) {
        $stmt->bind_param("i", $player_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
           echo "<div class ='maien' >";
            echo "<h1 class='title name'>" . htmlspecialchars($row['name']) . "</h1>";
         echo "</div>";
            echo "<div class='title-container'>";
            echo "<h2 class='title'>Player Statistics</h2>";
            echo"</div>";
            echo "<div class= 'table-container'>";
            echo "<table border='1'>";
            echo "<tr><th>Game ID</th><th>Goals</th><th>Assists</th><th>Minutes Played</th><th>Penalties</th></tr>";

            do {
                echo "<tr>";
                echo "<td>" . $row['game_id'] . "</td>";
                echo "<td>" . $row['goals'] . "</td>";
                echo "<td>" . $row['assists'] . "</td>";
                echo "<td>" . $row['minutes_played'] . "</td>";
                echo "<td>" . $row['penalties'] . "</td>";
                echo "</tr>";
            } while ($row = $result->fetch_assoc());

            echo "</table>";
            echo "</div>";
            echo "<br>";
        } else {
            echo  "<h2 class='error title'>No stats found for player ID $player_id </h2>";
        }
        $stmt->close();
    } else {
        echo "Prepare statement failed: " . $conn->error;
    }

    $playerFactsQuery = "
    SELECT 
        player.name, 
        School.Name AS school_name, 
        SchoolRank.schoolRank_id AS player_rank, 
        Scholarship.ScholarshipTerms AS scholarship_terms,
        InjuryReport.InjuryDetails AS injury_details 
    FROM player
    INNER JOIN Roster ON player.player_id = Roster.player_id
    INNER JOIN Team ON Roster.Team_id = Team.Team_id
    INNER JOIN School ON Team.School_id = School.School_id
    INNER JOIN SchoolRank ON School.School_id = SchoolRank.school_id
    INNER JOIN Scholarship ON player.player_id = Scholarship.Player_id
    LEFT JOIN InjuryReport ON player.player_id = InjuryReport.Player_id
    WHERE player.player_id = ?
    GROUP BY player.player_id";
if ($stmt = $conn->prepare($playerFactsQuery)) {
    $stmt->bind_param("i", $player_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
       echo "<div class='title-container'>";
        echo "<h2 class='title'>Player Details</h2>";
        echo "</div>";
        echo "<div class= 'table-container'>";
        echo "<table>";
        echo "<tr><th>School Name</th><th>Player Rank</th><th>Scholarship Terms</th><th>Injury Details</th></tr>";
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['school_name']) . "</td>";
        echo "<td>" . $row['player_rank'] . "</td>";
        echo "<td>" . htmlspecialchars($row['scholarship_terms']) . "</td>";
        echo "<td>" . htmlspecialchars($row['injury_details']) . "</td>";
        echo "</tr>";
        echo "</table>";
        echo "</div>";
    } else {
        echo "<h2 class='error title'>No details found for player ID $player_id </h2>"  ;
    }
    $stmt->close();
} else {
    echo "Prepare statement failed: " . $conn->error;
}
} else {
echo "Invalid player ID.";
}

$conn->close();
?>

<?php
include "./includes/footer.php";
?>

<style>
.title {
    color: white;
    font-size: 2rem;
    text-align: center; 
}

.error{
    color:yellow;
    font-size: 1.8;
}
.title.name{
font-size:1.8rem;
font-weight:bold;
}

.table-container {
    max-width: 800px;
    margin: 0 auto;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0,0,0,0.1);
    border-radius: 10px;
    background-color: #fff;
}
.title-container {
    background-color: rgba(64, 64, 64, 0.5);







 
    padding: auto;
    border-radius: 10px; 
    text-align: center; 
    width: fit-content; 
    margin: auto; 
}
.maien {
    background-color: rgba(0, 0, 0, 0.5); 
    padding: auto; 
    border-radius: 10px; 
    text-align: left; 
    width: auto; 
    margin: auto;
}

.table-container table {
    width: 100%;
    border-collapse: collapse;
    margin: 0;
    padding: 0;
    background-color: #f8f8f8;
}


.table-container th {
    background-color: black;
    color: white;
    font-weight: bold;
    text-align: left;
    padding: 12px 15px;
}


.table-container tr {
    border-bottom: 1px solid #ddd;
}

.table-container td {
    padding: 12px 15px;
    text-align: left;
    color: #333;
}

.table-container tr:nth-child(even) {
    background-color: #f2f2f2;
}


.table-container tr:hover {
    background-color: #e8e8e8;
}


@media screen and (max-width: 600px) {
    .table-container table {
        display: block;
        overflow-x: auto;
    }
}

</style>