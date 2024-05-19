<?php
$title="Registration";
include "./includes/header.php";
$servername = "localhost";
$username = "name";
$password = "Password";
$dbname = "cnsa";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<div class="centered-content">
    <a href="register.php" class="transparent-box-link" id="register-link">
        <div class="transparent-box" id="register-box">Register players</div>
    </a>
    <a href="reg-player-stats.php" class="transparent-box-link" id="stat-link">
        <div class="transparent-box" id="highschool-box">Register Player Statistics</div>
    </a>
    <a href="reg-player-injury.php" class="transparent-box-link" id="injuries-link">
        <div class="transparent-box" id="highschool-box">Register Player injuries</div>
    </a>
    <a href="reg-player-recruitment.php" class="transparent-box-link" id="recruitment-link">
        <div class="transparent-box" id="highschool-box">Register Recruitement incident</div>
    </a>
    <a href="reg-player-Scholarship.php" class="transparent-box-link" id="scholarships-link">
        <div class="transparent-box" id="highschool-box">Register Player Scholarship</div>
    </a>
    <a href="roster.php" class="transparent-box-link" id="-link">
        <div class="transparent-box" id="highschool-box">Register Player Roster</div>
    </a>
</div>

<?php include "./includes/footer.php"; ?>