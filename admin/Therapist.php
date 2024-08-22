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

include_once "config.php";

// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Initialize an empty message variable
$message = "";

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve and sanitize input
    $fname = isset($_POST['fname']) ? mysqli_real_escape_string($conn, $_POST['fname']) : null;
    $lname = isset($_POST['lname']) ? mysqli_real_escape_string($conn, $_POST['lname']) : null;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) : null;
    $speciality = isset($_POST['speciality']) ? mysqli_real_escape_string($conn, $_POST['speciality']) : null;
    $about = isset($_POST['about']) ? mysqli_real_escape_string($conn, $_POST['about']) : null;
    $password = isset($_POST['password']) ? mysqli_real_escape_string($conn, $_POST['password']) : null;
    $role = "therapists";

    // Check if inputs are not empty
    if (!empty($fname) && !empty($lname) && !empty($email) && !empty($speciality) && !empty($about) && !empty($password)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Check if email already exists
            $sql = mysqli_query($conn, "SELECT * FROM therapists WHERE email = '{$email}'");
            if (mysqli_num_rows($sql) > 0) {
                $message = "$email - This email already exists!";
            } else {
                // Check if file is uploaded
                if (isset($_FILES['image'])) {
                    $img_name = $_FILES['image']['name'];
                    $img_type = $_FILES['image']['type'];
                    $tmp_name = $_FILES['image']['tmp_name'];
                    
                    $img_explode = explode('.', $img_name);
                    $img_ext = end($img_explode);

                    $extensions = ["jpeg", "png", "jpg"];
                    if (in_array($img_ext, $extensions) === true) {
                        $types = ["image/jpeg", "image/jpg", "image/png"];
                        if (in_array($img_type, $types) === true) {
                            $time = time();
                            $new_img_name = $time . $img_name;
                            if (move_uploaded_file($tmp_name, "../Therapist/php/images/" . $new_img_name)) {
                                $ran_id = rand(time(), 100000000);
                                $status = "Offline";
                                $encrypt_pass = md5($password);
                                $insert_query = mysqli_query($conn, "INSERT INTO therapists (unique_id, fname, lname, email, speciality, about, password, img, status, role) VALUES ({$ran_id}, '{$fname}', '{$lname}', '{$email}', '{$speciality}', '{$about}', '{$encrypt_pass}', '{$new_img_name}', '{$status}', '{$role}')");
                                if ($insert_query) {
                                    $message = "success";
                                } else {
                                    $message = "Something went wrong. Please try again!";
                                    $message .= " Error: " . mysqli_error($conn);
                                }
                            }
                        } else {
                            $message = "Please upload an image file - jpeg, png, jpg";
                        }
                    } else {
                        $message = "Please upload an image file - jpeg, png, jpg";
                    }
                }
            }
        } else {
            $message = "$email is not a valid email!";
        }
    } else {
        $message = "All input fields are required!";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Therapy Dashboard</title>
    <style>
           body {
            background-color: #b2e7e4;
            font-family: 'Source Sans Pro', sans-serif;
        }
        .register-box {
            width: 900px;
            padding: 20px;
            background: #ffffff;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            border-radius: 10px;
            text-align: center;
        }
        .register-logo a {
            color: #26aba3;
            font-size: 30px;
            font-weight: bold;
            text-decoration: none;
        }
        .register-card-body {
            padding: 30px;
        }
        .register-card-body .input-group .form-control {
            border-right: 0;
            border-radius: 5px 0 0 5px;
            height: 45px;
        }
        .register-card-body .input-group .input-group-text {
            background-color: #26aba3;
            color: white;
            border-left: 0;
            border-radius: 0 5px 5px 0;
        }
        .btn-primary {
            background-color: #26aba3;
            border-color: #26aba3;
            transition: background-color 0.3s, border-color 0.3s;
            border-radius: 5px;
            height: 45px;
        }
        .btn-primary:hover {
            background-color: #1d8d82;
            border-color: #1d8d82;
        }
        .btn-primary:focus {
            outline: none;
            box-shadow: 0 0 5px rgba(38, 171, 163, 0.5);
        }
        .register-box-msg {
            margin-bottom: 20px;
            font-size: 1.1em;
            color: #666666;
        }
        .card {
            border: none;
            border-radius: 10px;
        }
        .card-body {
            padding: 30px;
        }
        .input-group .form-control:focus {
            box-shadow: none;
            border-color: #26aba3;
        }
        .input-group .input-group-text:focus {
            box-shadow: none;
            border-color: #26aba3;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1.0/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="style.css">
    
</head>
<body class="hold-transition sidebar-mini ">
<?php if ($message == "success"): ?>
        <script>alert("Registration successful!");</script>
    <?php elseif (!empty($message)): ?>
        <script>alert("<?php echo $message; ?>");</script>
    <?php endif; ?>
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index.html" class="nav-link">Home</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <!-- User Profile Dropdown -->
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <img src="images/agaba.png" class="user-image img-circle elevation-2" alt="User Image">
                    <span class="d-none d-md-inline">Admin</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <!-- User image -->
                    <li class="user-header bg-primary">
                        <img src="images/agaba.png" class="img-circle elevation-2" alt="User Image">
                        
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        
                        <a href="logout.php" class="btn btn-default btn-flat float-right">Sign out</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="dash.php" class="brand-link">
            <span class="brand-text font-weight-light">Admin Dashboard</span>
        </a>
        <div class="sidebar">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="images/agaba.png" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="dash.php" class="d-block">Admin</a>
                </div>
            </div>
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                    <li class="nav-item">
                        <a href="dash.php" class="nav-link active">
                            <i class="nav-icon fas fa-home"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="Therapist.php" class="nav-link">
                            <i class="nav-icon fas fa-user-md"></i>
                            <p>
                                Manage Therapists
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="Therapist.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add Therapist</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="manage.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Therapists</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-envelope"></i>
                            <p>
                                Contact Us
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="view_messages.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>View Messages</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="reply_messages.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Reply</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="forum.php" class="nav-link">
                            <i class="nav-icon fas fa-comments"></i>
                            <p>Forum</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="users.php" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Users</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!-- /.sidebar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" >
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Therapist Registration</h1>
                    </div>
                </div>
            </div>
        </div>
      <center>
   
        <!-- Main content -->
        <div class="register-box" style="width: 800px;">
            <div class="register-logo">
                <a href="#"><b>Therapist Registration</b></a>
            </div>
            <div class="card">
                <div class="card-body register-card-body">
                   
                <form action="Therapist.php" method="POST" enctype="multipart/form-data">
    <div class="input-group mb-3">
        <input type="text" name="fname" class="form-control" placeholder="First Name" required>
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-user"></span>
            </div>
        </div>
    </div>
    <div class="input-group mb-3">
        <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-user"></span>
            </div>
        </div>
    </div>
    <div class="input-group mb-3">
        <input type="email" name="email" class="form-control" placeholder="Email" required>
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-envelope"></span>
            </div>
        </div>
    </div>
    <div class="input-group mb-3">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock"></span>
            </div>
        </div>
    </div>
    <div class="input-group mb-3">
    <select name="speciality" id="speciality" placeholder="Enter speciality" required>
          <option>Select Speciality</option>
    <option value="Psychiatrist">Psychiatrist</option>
    <option value="Clinical Psychologist">Clinical Psychologist</option>
    <option value="Counseling Psychologist">Counseling Psychologist</option>
    <option value="Licensed Professional Counselor (LPC)">Licensed Professional Counselor (LPC)</option>
    <option value="Licensed Mental Health Counselor (LMHC)">Licensed Mental Health Counselor (LMHC)</option>
    <option value="Marriage and Family Therapist (MFT)">Marriage and Family Therapist (MFT)</option>
    <option value="Clinical Social Worker (LCSW or LMSW)">Clinical Social Worker (LCSW or LMSW)</option>
    <option value="Psychiatric Nurse Practitioner (PMHNP)">Psychiatric Nurse Practitioner (PMHNP)</option>
    <option value="School Psychologist">School Psychologist</option>
    <option value="Rehabilitation Counselor">Rehabilitation Counselor</option>
    <option value="Addiction Counselor">Addiction Counselor</option>
    <option value="Art Therapist">Art Therapist</option>
    <option value="Music Therapist">Music Therapist</option>
    <option value="Dance Therapist">Dance Therapist</option>
    <option value="Pastoral Counselor">Pastoral Counselor</option>
</select>
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-stethoscope"></span>
            </div>
        </div>
    </div>
    <div class="input-group mb-3">
        <textarea name="about" class="form-control" placeholder="About" required></textarea>
    </div>
    <div class="input-group mb-3">
        <input type="file" name="image" class="form-control" required>
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-image"></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
        </div>
    </div>
</form>

                </div>
            </div>
        </div>
      </center>
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <strong>Copyright &copy; Heal space 2024</strong> All rights reserved.
    </footer>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1.0/dist/js/adminlte.min.js"></script>

</body>
</html>