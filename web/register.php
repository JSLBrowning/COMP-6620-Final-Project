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

if (($_SERVER["REQUEST_METHOD"] == "POST") && (isset($_POST['submit']))) {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
    
    $sql = "SELECT * FROM users WHERE user_email = '$email'";
    $result = $conn->query($sql) or die($conn->error);
    $numrows = $result->num_rows;
    if($numrows == 0) {
        $_SESSION['loggedin'] = false;
        $sql = "INSERT INTO users (user_email, user_password) VALUES ('$email', SHA2(CONCAT('$password','$email'),512))";
        $result = $conn->query($sql) or die($conn->error);
        echo "Account created";
        header("Location: login.php");
    }
    else {
        $_SESSION['loggedin'] = false;
        echo "Email already taken";
    }
}

?>

<div class="container" style="margin-top: 50px;">
    <h4 class="text-center">Super dumb BJC app</h4><br>
    <h5>Register by providing your email and password</h5>

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
                <div class="form-group mx-sm-3 mb-2">
                    <input id="submit" name="submit" type="submit" value="Submit" class="btn btn-primary mb-2">
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
