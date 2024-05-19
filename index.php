<?php
$title = "Home Page";
include "./includes/header.php";
if (!isset($_SESSION['user'])) 
{
    redirect("./login.php");
} 

?>
<div class="centered-content">
    <a href="college.php" class="transparent-box-link" id="college-link">
        <div class="transparent-box" id="college-box">College</div>
    </a>
    <a href="highschool.php" class="transparent-box-link" id="highschool-link">
        <div class="transparent-box" id="highschool-box">Highschool</div>
    </a>
    <a href="game.php" class="transparent-box-link" id="highschool-link">
        <div class="transparent-box" id="highschool-box">Game Scores</div>
    </a>
</div>

<?php
include "./includes/footer.php";
?>    