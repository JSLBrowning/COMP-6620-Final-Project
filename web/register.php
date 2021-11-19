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
    <link rel="stylesheet" href="/css/main.css">
    <link rel="shortcut icon" href="/assets/bjc.png" />
</head>

<body>
    <?php
    require_once "session_management.php";

    if (($_SERVER["REQUEST_METHOD"] == "POST") && (isset($_POST['submit']))) {
        $email = $conn->real_escape_string($_POST['email']);
        $password = $conn->real_escape_string($_POST['password']);
        $firstname = $conn->real_escape_string($_POST['firstname']);

        $sql = "SELECT * FROM users WHERE user_email = '$email'";
        $result = $conn->query($sql) or die($conn->error);
        $numrows = $result->num_rows;
        if ($numrows == 0) {
            $_SESSION['loggedin'] = false;
            $sql = "INSERT INTO users (user_email, user_password, user_firstname) VALUES ('$email', SHA2(CONCAT('$password','$email'),512), '$firstname')";
            $result = $conn->query($sql) or die($conn->error);
            header("Location: login.php?registerSuccess=1");
        } else {
            $_SESSION['loggedin'] = false;
            echo '<div class="alert alert-danger alert-dismissable" id="flash-msg"> <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button> <h4><i class="icon fa fa-check"></i>Email already taken</h4></div>';
        }
    }

    require_once "header.php";
    ?>

    <div class="container" style="margin-top: 75px;">
        <h4 class="text-center">Registration</h4><br>
        <h5>Register by providing your email and desired password</h5>


        <form id="login register" class="form-inline" method="POST" action="">
            <div class="form-group mb-2">
                <label for="email" class="sr-only">Email</label>
                <input id="email" type="email" class="form-control" name="email" placeholder="Email" required autofocus>
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <label for="password" class="sr-only">Password</label>
                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required autofocus>
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <label for="firstname" class="sr-only">First (Given) Name</label>
                <input id="firstname" type="text" class="form-control" name="firstname" placeholder="First (Given) Name" required autofocus>
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <input id="submit" name="submit" type="submit" value="Submit" class="btn btn-primary mb-2">
            </div>
        </form>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>