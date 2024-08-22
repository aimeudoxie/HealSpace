<?php
$servername = "localhost";
$dbusername = "root"; // Adjust if different
$dbpassword = ""; // Adjust if different
$dbname = "therapy_room";

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
