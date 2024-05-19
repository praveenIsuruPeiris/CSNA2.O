<?php
$title="Register player";
include "./includes/header.php";
$servername = "localhost";
$username = "name";
$password = "Password";
$dbname = "cnsa";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $gender = $conn->real_escape_string($_POST['gender']);
    $position = $conn->real_escape_string($_POST['position']);
    $school_id = $conn->real_escape_string($_POST['school_id']);
    $telephone = $conn->real_escape_string($_POST['telephone']);
    $street_Address = $conn->real_escape_string($_POST['street_Address']);
    $player_Rank = $conn->real_escape_string($_POST['player_Rank']);
    $schoolType = $conn->real_escape_string($_POST['schoolType']);
    
    $sql = "INSERT INTO player (name, gender, position, school_id, telephone, street_Address, player_Rank, schoolType) 
            VALUES ('$name', '$gender', '$position', '$school_id', '$telephone', '$street_Address', '$player_Rank', '$schoolType')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<h2 class ='success title'> New record created successfully</h2>" ;
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
    <title>Register Player</title>
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
            <h1>Register Player</h1>
            <form action="register.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required><br>
                
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                    <option value="O">Other</option>
                </select><br>
                
                <label for="position">Position:</label>
                <input type="text" id="position" name="position" required><br>
                
                <label for="school_id">School ID:</label>
                <input type="number" id="school_id" name="school_id" required><br>
                
                <label for="telephone">Telephone:</label>
                <input type="text" id="telephone" name="telephone" required><br>
                
                <label for="street_Address">Street Address:</label>
                <input type="text" id="street_Address" name="street_Address" required><br>
                
                <label for="player_Rank">Player Rank:</label>
                <input type="number" id="player_Rank" name="player_Rank" required><br>
                <label for="schoolType">School Type:</label>
                <select id="schoolType" name="schoolType" required>
                    <option value="college">College</option>
                    <option value="highschool">High School</option>
                </select><br><br>

                <input type="submit" value="Register">
            </form>
        </div>
    </div>
</body>
</html>
<?php
include "./includes/footer.php";
?>