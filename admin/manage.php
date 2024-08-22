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

// Handle delete request
if (isset($_POST['delete_id'])) {
    $id = $_POST['delete_id'];
    $sql = "DELETE FROM therapists WHERE therapist_id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
    $message = "Therapist successfully deleted.";
}

// Handle update request
if (isset($_POST['update_id'])) {
    $id = $_POST['update_id'];
    $fname = $_POST['update_fname'];
    $lname = $_POST['update_lname'];
    $email = $_POST['update_email'];
    $role = $_POST['update_role'];
    $speciality = $_POST['update_speciality'];
    $about = $_POST['update_about'];

    $sql = "UPDATE therapists SET fname=?, lname=?, email=?, role=?, speciality=?, about=? WHERE therapist_id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssi", $fname, $lname, $email, $role, $speciality, $about, $id);
    $stmt->execute();
    $stmt->close();
    $message = "Therapist successfully updated.";
}

// Query to get data
$sql = "SELECT therapist_id, fname, lname, email, role, speciality, about FROM therapists";
$result = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Therapy Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1.0/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="style.css">
    <style>
        .modal-input {
            margin-bottom: 10px;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini">
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
                        <a href="#" class="nav-link">
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
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Therapists List</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main content -->
        
        <div class="container">
    <h5 class="my-4">Therapists</h5>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Speciality</th>
                <th>About</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["fname"] . "</td>";
                    echo "<td>" . $row["lname"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["role"] . "</td>";
                    echo "<td>" . $row["speciality"] . "</td>";
                    echo "<td>" . $row["about"] . "</td>";
                    echo '<td><button class="btn btn-primary updateBtn" data-id="' . $row["therapist_id"] . '">Update</button></td>';
                    echo '<td><button class="btn btn-danger deleteBtn" data-id="' . $row["therapist_id"] . '">Delete</button></td>';
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='8'>No results found</td></tr>";
            }
            $conn->close();
            ?>
        </tbody>
    </table>
</div>

<!-- Update Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form method="POST" id="updateForm">
        <div class="modal-header">
          <h5 class="modal-title" id="updateModalLabel">Update Therapist</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="update_id" id="update_id">
          <div class="form-group modal-input">
            <label for="update_fname">First Name</label>
            <input type="text" class="form-control" name="update_fname" id="update_fname">
          </div>
          <div class="form-group modal-input">
            <label for="update_lname">Last Name</label>
            <input type="text" class="form-control" name="update_lname" id="update_lname">
          </div>
          <div class="form-group modal-input">
            <label for="update_email">Email</label>
            <input type="email" class="form-control" name="update_email" id="update_email">
          </div>
          <div class="form-group modal-input">
            <label for="update_role">Role</label>
            <input type="text" class="form-control" name="update_role" id="update_role">
          </div>
          <div class="form-group modal-input">
            <label for="update_speciality">Speciality</label>
            <input type="text" class="form-control" name="update_speciality" id="update_speciality">
          </div>
          <div class="form-group modal-input">
            <label for="update_about">About</label>
            <textarea class="form-control" name="update_about" id="update_about"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Delete Form -->
<form method="POST" id="deleteForm" style="display: none;">
    <input type="hidden" name="delete_id" id="delete_id">
</form>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        // Update button click
        $('.updateBtn').on('click', function() {
            $('#updateModal').modal('show');
            var id = $(this).data('id');
            
            // AJAX request to get data
            $.ajax({
                url: 'get_therapist.php',
                type: 'post',
                data: {id: id},
                success: function(response) {
                    var therapist = JSON.parse(response);
                    $('#update_id').val(therapist.therapist_id);
                    $('#update_fname').val(therapist.fname);
                    $('#update_lname').val(therapist.lname);
                    $('#update_email').val(therapist.email);
                    $('#update_role').val(therapist.role);
                    $('#update_speciality').val(therapist.speciality);
                    $('#update_about').val(therapist.about);
                }
            });
        });

        // Delete button click
        $('.deleteBtn').on('click', function() {
            var id = $(this).data('id');
            if (confirm('Are you sure you want to delete this therapist?')) {
                $('#delete_id').val(id);
                $('#deleteForm').submit();
            }
        });
    });
</script>

          
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
