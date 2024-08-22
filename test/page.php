<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gad7_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];
$q6 = $_POST['q6'];
$q7 = $_POST['q7'];

// Calculate total score
$total_score = $q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7;

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO gad7_results (q1, q2, q3, q4, q5, q6, q7, total_score) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("iiiiiiii", $q1, $q2, $q3, $q4, $q5, $q6, $q7, $total_score);

if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
