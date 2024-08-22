<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Register to Therapy Room</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>First Name</label>
            <input type="text" name="fname" placeholder="First name" required>
          </div>
          <div class="field input">
            <label>Last Name</label>
            <input type="text" name="lname" placeholder="Last name" required>
          </div>
        </div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Age</label>
          <input type="number" name="age" placeholder="Enter your age" required>
        </div>
        <div class="field input">
    <label for="marital-status">Marital status</label>
    <select name="marital-status" id="marital-status" required>
        <option value="" disabled selected>Select your status</option>
        <option value="single">Single</option>
        <option value="married">Married</option>
        <option value="divorced">Divorced</option>
        <option value="widowed">Widowed</option>
        <option value="other">Prefer not to say</option>
    </select>
</div>
<div class="field input">
    <label for="occupation">Occupation or Career</label>
    <select name="occupation" id="occupation" required>
        <option value="" disabled selected>Select your occupation</option>
        <option value="student">Student</option>
        <option value="employed">Employed</option>
        <option value="self-employed">Self-employed</option>
        <option value="unemployed">Unemployed</option>
        <option value="retired">Retired</option>
        <option value="other">Other</option>
        <option value="other">Prefer not to say</option>
    </select>
</div>
<div class="field input">
    <label for="location">Location</label>
    <select name="location" id="location" required>
        <option value="" disabled selected>Select your location</option>
        <option value="Kigali city">Kigali city</option>
        <option value="Northern province">Northern province</option>
        <option value="Southern province">Southern province</option>
        <option value="Eastern province">Eastern province</option>
        <option value="Western province">Western province</option>
        <option value="Prefer not to say">Prefer not to say</option>
    </select>
</div>

        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter new password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Select Image</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Therapy room">
        </div>
      </form>
      <div class="link">Already signed up? <a href="login.php">Login now</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>
  
</body>
</html>
