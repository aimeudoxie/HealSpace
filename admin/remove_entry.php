<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "therapy_room";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$entry_id = $_POST['entry_id'];

$sql = "DELETE FROM calendar_entries WHERE entry_id='$entry_id'";

$response = [];
if ($conn->query($sql) === TRUE) {
    $response['success'] = true;
} else {
    $response['success'] = false;
    $response['error'] = $conn->error;
}

$conn->close();
echo json_encode($response);
?>
