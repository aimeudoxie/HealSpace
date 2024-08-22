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

// Handle delete request
$message = '';
if (isset($_POST['delete_id'])) {
    $id = $_POST['delete_id'];
    $sql = "DELETE FROM user_messages WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        $message = "Message successfully deleted.";
    } else {
        $message = "Error deleting message: " . $stmt->error;
    }
    $stmt->close();
}

// Query to get data
$sql = "SELECT id, name, email, message, created_at FROM user_messages";
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
                <a href="dash.php" class="nav-link">Home</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            
            <!-- User Profile Dropdown -->
            <li class="nav-item dropdown user-menu">
                <a href="dash.php" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <img src="images/agaba.png" class="user-image img-circle elevation-2" alt="User Image">
                    <span class="d-none d-md-inline">Admin</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <!-- User image -->
                    <li class="user-header bg-primary">
                        <img src="images/agaba.png" class="img-circle elevation-2" alt="User Image">
                        <p>
                            Admin - Super Admin
                            <small>Member since Nov. 2023</small>
                        </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                    
                        <a href="logout.php" class="btn btn-default btn-flat float-right">Sign out</a>
                    </li>
                </ul>
            </li>
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
                        <h1 class="m-0">Contact_Us Messages</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main content -->
    <div class="container">
        
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Created At</th>
                <th>Delete</th>
                <th>Reply</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row["name"]) . "</td>";
                    echo "<td>" . htmlspecialchars($row["email"]) . "</td>";
                    echo "<td>" . htmlspecialchars($row["message"]) . "</td>";
                    echo "<td>" . htmlspecialchars($row["created_at"]) . "</td>";
                    echo '<td><button class="btn btn-danger deleteBtn" data-id="' . $row["id"] . '">Delete</button></td>';
                    echo '<td><button class="btn btn-primary replyBtn" data-email="' . $row["email"] . '" data-message="' . $row["message"] . '">Reply</button></td>';
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No messages found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<!-- Delete Form -->
<form method="POST" id="deleteForm" style="display: none;">
    <input type="hidden" name="delete_id" id="delete_id">
</form>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function() {
        // Delete button click
        $('.deleteBtn').on('click', function() {
            var id = $(this).data('id');
            if (confirm('Are you sure you want to delete this message?')) {
                $('#delete_id').val(id);
                $('#deleteForm').submit();
            }
        });

        // Reply button click
        $('.replyBtn').on('click', function() {
            var email = $(this).data('email');
            var message = $(this).data('message');
            var subject = "Re: Your Message";
            var body = `Hello,\n\nRegarding your message: "${message}"\n\n`;
            var mailtoLink = `https://mail.google.com/mail/?view=cm&fs=1&to=${encodeURIComponent(email)}&su=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
            window.open(mailtoLink, '_blank');
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
