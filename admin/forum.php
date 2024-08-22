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
$dbname = "forum";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize a variable to store the deletion status
$deletion_status = false;

// Handle delete request
if (isset($_POST['delete_id']) && isset($_POST['table'])) {
    $id = $_POST['delete_id'];
    $table = $_POST['table'];
    $sql = "DELETE FROM $table WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        $deletion_status = true;  // Set the flag to true if deletion is successful
    }
    $stmt->close();
}

// Queries to get data
$sql_anxiety = "SELECT id, student, post, date FROM anxiety";
$result_anxiety = $conn->query($sql_anxiety);

$sql_depression = "SELECT id, student, post, date FROM depression";
$result_depression = $conn->query($sql_depression);

$sql_ptsd = "SELECT id, student, post, date FROM ptsd";
$result_ptsd = $conn->query($sql_ptsd);
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
                <a href="dash.php" class="nav-link">Home</a>
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
                                <a href="therapists.php" class="nav-link">
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
                        <h1 class="m-0">The Messages</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main content -->
        
        <div class="container">
            <h2 class="my-4">Forum Posts</h2>
            <p class="font-weight-bold">
                NB: The messages here are from the forum conversation. If any message or comment contains unrelated content, it should be removed to be not seen by the users.
            </p>

            <h3>Anxiety</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Names</th>
                        <th>Post</th>
                        <th>Date</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result_anxiety->num_rows > 0) {
                        while($row = $result_anxiety->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["student"] . "</td>";
                            echo "<td>" . $row["post"] . "</td>";
                            echo "<td>" . $row["date"] . "</td>";
                            echo '<td><button class="btn btn-danger deleteBtn" data-id="' . $row["id"] . '" data-table="anxiety">Delete</button></td>';
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>No results found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>

            <h3>Depression</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Names</th>
                        <th>Post</th>
                        <th>Date</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result_depression->num_rows > 0) {
                        while($row = $result_depression->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["student"] . "</td>";
                            echo "<td>" . $row["post"] . "</td>";
                            echo "<td>" . $row["date"] . "</td>";
                            echo '<td><button class="btn btn-danger deleteBtn" data-id="' . $row["id"] . '" data-table="depression">Delete</button></td>';
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>No results found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>

            <h3>PTSD</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Names</th>
                        <th>Post</th>
                        <th>Date</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result_ptsd->num_rows > 0) {
                        while($row = $result_ptsd->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["student"] . "</td>";
                            echo "<td>" . $row["post"] . "</td>";
                            echo "<td>" . $row["date"] . "</td>";
                            echo '<td><button class="btn btn-danger deleteBtn" data-id="' . $row["id"] . '" data-table="ptsd">Delete</button></td>';
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>No results found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!-- Delete Form -->
        <form method="POST" id="deleteForm" style="display: none;">
            <input type="hidden" name="delete_id" id="delete_id">
            <input type="hidden" name="table" id="table">
        </form>

        <!-- JavaScript to handle deletion and show alert -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function() {
                // Delete button click
                $('.deleteBtn').on('click', function() {
                    var id = $(this).data('id');
                    var table = $(this).data('table');
                    if (confirm('Are you sure you want to delete this post?')) {
                        $('#delete_id').val(id);
                        $('#table').val(table);
                        $('#deleteForm').submit();
                    }
                });

                // Check for deletion status and show alert
                <?php if ($deletion_status) : ?>
                    alert('Post deleted successfully!');
                <?php endif; ?>
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
