<!DOCTYPE html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Super dumb BJC app</title>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>

<body>
<?php
require_once "session_management.php";

if (($_SERVER["REQUEST_METHOD"] == "POST") && (isset($_POST['login']))) {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
    
    $sql = "SELECT * FROM users WHERE user_email = '$email' AND user_password = SHA2(CONCAT('$password','$email'),512)";
    $result = $conn->query($sql) or die($conn->error);
    $numrows = $result->num_rows;
    if($numrows == 1) {
        $_SESSION['loggedin'] = true;
        header("Location: index.php");
    }
    else {
        $_SESSION['loggedin'] = false;
        echo "Invalid email or password";
    }
}

if (($_SERVER["REQUEST_METHOD"] == "POST") && (isset($_POST['register']))) {
    header("Location: register.php");
}

?>

<div class="container" style="margin-top: 50px;">
    <h4 class="text-center">Super dumb BJC app</h4><br>
    <h5>Enter email and password to login</h5>

    <div class="card card-default">
        <div class="card-body">
            <form id="login" class="form-inline" method="POST" action="">
                <div class="form-group mb-2">
                    <label for="email" class="sr-only">Name</label>
                    <input id="email" type="email" class="form-control" name="email"   placeholder="Email" required autofocus>
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <label for="password" class="sr-only">Email</label>
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password" required autofocus>
                </div>
                <input id="submit" name="login" type="submit" value="Login" class="btn btn-primary mb-2">
            </form>
        </div>
    </div>

    <h5>Or click Register to create a new account</h5>
    <div class="card card-default">
        <div class="card-body">
            <form id="register" class="form-inline" method="POST" action="">
                <input id="submit" name="register" type="submit" value="Register" class="btn btn-primary mb-2">
            </form>
        </div>
    </div>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
