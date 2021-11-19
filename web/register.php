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
            $sql = "INSERT INTO users (user_email, user_password, user_firstname, user_role) VALUES ('$email', SHA2(CONCAT('$password','$email'),512), '$firstname', 'student')";
            $result = $conn->query($sql) or die($conn->error);
            header("Location: login.php?registerSuccess=1");
        } else {
            $_SESSION['loggedin'] = false;
            echo '<div style="margin-top: 75px; class="alert alert-danger alert-dismissable" id="flash-msg"> <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button> <h4><i class="icon fa fa-check"></i>Email already taken</h4></div>';
        }
    }

    // require_once "header.php";
    ?>

    <div class="container">
        <header>
            <img width="100px" src="/assets/bjc.png">
        </header>
        <br />

        <h4 class="text-center">Registration</h4><br/>
        <h5>Register by providing the required information</h5>

        <form method="POST" id="login register" action="">
          <div class="form-group">
            <h5><label for="email">Email address</label></h5>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" required autofocus>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <h5><label for="password">Password</label></h5>
            <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
          </div>
          <div class="form-group">
            <h5><label for="firstname">First (given) name</label></h5>
            <input type="text" class="form-control" id="firstname" placeholder="First (given) name" name="firstname" required>
          </div>
          <button type="submit" id="submit" name="submit" type="submit" value="Submit" class="btn btn-primary">Submit</button>
        </form>


    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
