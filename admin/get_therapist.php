<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "therapy_room";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = "SELECT therapist_id, fname, lname, email, role, speciality, about FROM therapists WHERE therapist_id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $therapist = $result->fetch_assoc();
    echo json_encode($therapist);
    $stmt->close();
}

$conn->close();
?>
