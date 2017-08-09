<?php

// Start Session
session_start();

// Database connection
require __DIR__ . '/config/db_connection.php';
$db = DB();

// Application library ( with DemoLib class )
require __DIR__ . '/library/library.php';
$app = new DemoLib($db);

$login_error_message = '';

// check Login request
if (!empty($_POST['btnLogin'])) {

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if ($username == "") {
        $login_error_message = 'Username field is required!';
    } else if ($password == "") {
        $login_error_message = 'Password field is required!';
    } else {
        $user_id = $app->Login($username, $password); // check user login
        if($user_id > 0)
        {
            $_SESSION['user_id'] = $user_id; // Set Session
            header("Location: validate_login.php"); // Redirect user to validate auth code
        }
        else
        {
            $login_error_message = 'Invalid login details!';
        }
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OTP - MFA/2FA BYPASS</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="row jumbotron">
        <div class="col-md-12">
            <h2>
                <center>MULTI-FACTOR BYPASS SIMULATION</center>
            </h2>
            <p>
                <center>Note: This is a Vulnerable Multi-Factor Application</center>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5 col-md-offset-3 well">
            <h4>Login</h4>
            <?php
            if ($login_error_message != "") {
                echo '<div class="alert alert-danger"><strong>Error: </strong> ' . $login_error_message . '</div>';
            }
            ?>
            <form action="index.php" method="post">
                <div class="form-group">
                    <label for="">Username/Email</label>
                    <input type="text" name="username" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control"/>
                </div>
                <div class="form-group">
                    <input type="submit" name="btnLogin" class="btn btn-primary" value="Login"/>
                </div>
            </form>
            <div class="form-group">
                Not Registered Yet? <a href="registration.php">Register Here</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>