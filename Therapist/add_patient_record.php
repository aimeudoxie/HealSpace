<?php
session_start();
include_once "php/config.php";

if (!isset($_SESSION['unique_id'])) {
    header("location: index.php");
}

$therapist_id = $_SESSION['unique_id']; // The unique ID of the logged-in therapist
$patient_id = mysqli_real_escape_string($conn, $_GET['user_id']);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $diagnosis = mysqli_real_escape_string($conn, $_POST['diagnosis']);
    $treatment = mysqli_real_escape_string($conn, $_POST['treatment']);
    $duration = mysqli_real_escape_string($conn, $_POST['duration']);

    $sql = "INSERT INTO patient_records (patient_id, therapist_id, diagnosis, treatment, duration) VALUES ('$patient_id', '$therapist_id', '$diagnosis', '$treatment', '$duration')";
    if (mysqli_query($conn, $sql)) {
        header("Location: patient_profile.php?user_id=$patient_id");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<?php include_once "header.php"; ?>

<body>
  <div class="wrapper">
    <section class="form records">
    <?php
        $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
        if (mysqli_num_rows($sql) > 0) {
          $row = mysqli_fetch_assoc($sql);
        } else {
          header("location: users.php");
        }
        ?>
    <a href="chat.php?user_id=<?php echo $user_id; ?>" class="back-icon"><i class="fas fa-arrow-left"></i></a>
      <header>Add Patient Record</header>
      <form action="" method="POST">
        <div class="field input">
          <label for="diagnosis">Diagnosis</label>
          <input type="text" name="diagnosis" required>
        </div>
        <div class="field input">
          <label for="treatment">Treatment</label>
          <input type="text" name="treatment" required>
        </div>
        <div class="field input">
          <label for="duration">Duration</label>
          <input type="text" name="duration" required>
        </div>
        <div class="field button">
          <input type="submit" value="Add Record">
        </div>
      </form>
    </section>
  </div>
</body>

</html>
