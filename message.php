<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "therapy_room";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize message variable
$message = '';
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $user_message = $_POST['message'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO user_messages (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $user_message);

    if ($stmt->execute()) {
        $message = "Message successfully submitted.";
    } else {
        $message = "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>