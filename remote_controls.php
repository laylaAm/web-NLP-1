<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "smart";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["direction"])) {
    // Get the selected direction
    $direction = $_POST["direction"];

    // Create a connection to the database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert the instruction into the database
    $sql = "INSERT INTO smart (direction) VALUES ('$direction')";

    if ($conn->query($sql) === TRUE) {
        echo " .$direction. <br> successfully the inserted value ";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
    
}
?>
