<?php
session_start();
include_once "php/config.php";
if (!isset($_SESSION['unique_id'])) {
  header("location: login.php");
}
?>

<?php include_once "header.php"; ?>

<body>
  <div class="wrapper profile">
    <section class="profile-area">
      <header>
        <?php
        $therapist_id = mysqli_real_escape_string($conn, $_GET['therapist_id']);
        $sql = mysqli_query($conn, "SELECT * FROM therapists WHERE unique_id = {$therapist_id}");
        if (mysqli_num_rows($sql) > 0) {
          $row = mysqli_fetch_assoc($sql);
        } else {
          header("location: users.php");
        }
        ?>
        <a href="chat.php?therapist_id=<?php echo $therapist_id; ?>" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <img src="../Therapist/php/images/<?php echo $row['img']; ?>" alt="">
        <div class="details">
          <span><b><?php echo $row['fname'] . " " . $row['lname'] ?></b></span>
          <p><b>Email: </b><?php echo $row['email']; ?></p>
          <p><b>Specialization:</b> <?php echo $row['speciality']; ?></p>
          <p><b>Bio:</b> <?php echo $row['about']; ?></p>
          <!-- Add more details as needed -->
        </div>
      </header>
    </section>
  </div>
</body>

</html>
