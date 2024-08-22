<?php
session_start();
include_once "php/config.php";
if (!isset($_SESSION['unique_id'])) {
  header("location: index.php");
}
?>

<?php include_once "header.php"; ?>

<body>
  <div class="wrapper profile">
    <section class="profile-area">
      <header>
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
        <img src="../Therapy room/php/images/<?php echo $row['img']; ?>" alt="">
        <div class="details">
          <span><b><?php echo $row['fname'] . " " . $row['lname'] ?></b></span>
          <p><b>Email: </b><?php echo $row['email']; ?></p>
          <p><b>Age:</b> <?php echo $row['age']; ?></p>
          <p><b>Marital Status:</b> <?php echo $row['marital']; ?></p>
          <p><b>Occupation: </b><?php echo $row['occupation']; ?></p>
          <p><b>Location:</b> <?php echo $row['location']; ?></p>
        </div>
      </header>

      <div class="patient-records">
        <h2>Patient Records</h2>
        <?php
        $records_sql = mysqli_query($conn, "SELECT * FROM patient_records WHERE patient_id = {$user_id} ORDER BY created_at DESC");
      
        if (mysqli_num_rows($records_sql) > 0) {
          while ($record = mysqli_fetch_assoc($records_sql)) {
            $therapist_id = $record['therapist_id'];
            $therapist_sql = mysqli_query($conn, "SELECT * FROM therapists WHERE unique_id = {$therapist_id}");
            if ($therapist = mysqli_fetch_assoc($therapist_sql)) {
              ?>
              <div class="record">
                <p><b>Diagnosis:</b> <?php echo $record['diagnosis']; ?></p>
                <p><b>Treatment:</b> <?php echo $record['treatment']; ?></p>
                <p><b>Duration:</b> <?php echo $record['duration']; ?></p>
                <p><b>Recorded by Therapist:</b> <?php echo $therapist['fname'] . " " . $therapist['lname']; ?></p>
                <p><b>Date:</b> <?php echo $record['created_at']; ?></p>
                <hr>
              </div>
              
              <?php
            }
          }
        } else {
          echo "<p style='color:black;'>No records found.</p>";
        }
        ?>
      </div>
    </section>
  </div>
</body>
</html>
