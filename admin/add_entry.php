<?php
session_start();
include_once "config.php";

// Check if the admin is logged in by verifying the session variable
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  // If not logged in, redirect to the login page
  header("location: index.php");
  exit;
}
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "therapy_room";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$time = $_POST['time'];
$day = $_POST['day'];
$therapist_id = $_POST['therapist_id'];

$sql = "INSERT INTO calendar_entries (time, day, therapist_id) VALUES ('$time', '$day', '$therapist_id')";

$response = [];
if ($conn->query($sql) === TRUE) {
    $response['success'] = true;
    $response['entry_id'] = $conn->insert_id;
} else {
    $response['success'] = false;
    $response['error'] = $conn->error;
}

$conn->close();
echo json_encode($response);
?>
