<?php
$title ="HighSchool";
include "./includes/header.php";
$servername = "localhost";
$username = "name";
$password = "Password";
$dbname = "cnsa";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT player_id, name, gender, position, school_id, telephone, street_Address, player_Rank, schoolType FROM player WHERE schoolType = 'highschool'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<div class='table-container'>";
    echo "<table><tr><th>ID</th><th>Name</th><th>Gender</th><th>Position</th><th>School ID</th><th>Telephone</th><th>Address</th><th>Rank</th><th>School Type</th></tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["player_id"]."</td><td><a href='playerstats.php?player_id=".$row["player_id"]."'>".$row["name"]."</a></td><td>".$row["gender"]."</td><td>".$row["position"]."</td><td>".$row["school_id"]."</td><td>".$row["telephone"]."</td><td>".$row["street_Address"]."</td><td>".$row["player_Rank"]."</td><td>".$row["schoolType"]."</td></tr>";
    }

    echo "</table>";
    echo"</div>";
} else {
    echo "0 results";
}

$conn->close();
?>
<br>
<?php include "./includes/footer.php"; ?>
<style>
.title{
color:white;
font-size:2rem;
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


.table-container table {
    width: 100%;
    border-collapse: collapse;
    margin: 0;
    padding: 0;
    background-color: #f8f8f8;
}

.table-container th {
    background-color: black; /** #FA3D3D */
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