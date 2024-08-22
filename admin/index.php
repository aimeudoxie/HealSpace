<?php
session_start();
$login_error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Database connection settings
    $servername = "localhost";
    $username = "root"; // Use your database username
    $password = ""; // Use your database password
    $dbname = "therapy_room";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get user input
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and execute the query
    $sql = $conn->prepare("SELECT * FROM admin_table WHERE email = ? AND password = ?");
    $sql->bind_param('ss', $email, $password);
    $sql->execute();
    $result = $sql->get_result();

    // Check if user exists
    if ($result->num_rows === 1) {
        // Regenerate session ID to prevent session fixation attacks
        session_regenerate_id(true);

        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;

        header('Location: dash.php');
        exit();
    } else {
        $login_error = 'Invalid email or password';
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1.0/dist/css/adminlte.min.css">
    
    <style>
        body {
            background-color: #b2e7e4;
            font-family: 'Source Sans Pro', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-box {
            width: 600px;
            padding: 20px;
            background: #ffffff;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            border-radius: 10px;
            text-align: center;
        }
        .login-logo a {
            color: #26aba3;
            font-size: 30px;
            font-weight: bold;
            text-decoration: none;
        }
        .login-card-body {
            padding: 30px;
        }
        .login-card-body .input-group .form-control {
            border-right: 0;
            border-radius: 5px 0 0 5px;
            height: 45px;
        }
        .login-card-body .input-group .input-group-text {
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
        .login-box-msg {
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
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>Admin Dashboard</b></a>
    </div>
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <?php
            if (!empty($login_error)) {
                echo '<div class="alert alert-danger">' . $login_error . '</div>';
            }
            ?>
            <form action="index.php" method="POST">
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
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
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1.0/dist/js/adminlte.min.js"></script>
</body>
</html>
