<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BJC Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="shortcut icon" href="/assets/bjc.png" />
</head>

<body>
    <?php
    require_once "session_management.php";

    if (isset($_GET['registerSuccess'])) {
        echo '<h4 style="color: #aaffaa">Registration successful. Please log in.</h4>';
    }

    if (($_SERVER["REQUEST_METHOD"] == "POST") && (isset($_POST['login']))) {
        $email = $conn->real_escape_string($_POST['email']);
        $password = $conn->real_escape_string($_POST['password']);

        $sql = "SELECT * FROM users WHERE user_email = '$email' AND user_password = SHA2(CONCAT('$password','$email'),512)";
        $result = $conn->query($sql) or die($conn->error);
        $numrows = $result->num_rows;
        if ($numrows == 1) {
            $_SESSION['loggedin'] = true;
            $row = $result->fetch_assoc();
            $_SESSION['user_email'] = $row['user_email'];
            $_SESSION['user_firstname'] = $row['user_firstname'];
            $_SESSION['user_role'] = $row['user_role'];
            if ($_SESSION['user_role'] == 'teacher'){
                header("Location: training_status.php");
            }
            else {
                header("Location: courses.php");
            }
        } else {
            $_SESSION['loggedin'] = false;
            echo '<h4 style="color: #ffaaaa">Invalid username or password.</h4>';
        }
    }

    if (($_SERVER["REQUEST_METHOD"] == "POST") && (isset($_POST['register']))) {
        header("Location: register.php");
    }

    // require_once "header.php";
    ?>

    <div class="container" style="margin-top: 75px;">
        <header>
            <img width="100px" src="/assets/bjc.png">
        </header>
        <br />

        <h4 class="text-center">Welcome!</h4><br/>
        <h5>Enter your email and password to log in.</h5>

        <form method="POST" id="login" action="">
            <div class="form-group">
              <h5><label for="email">Email address</label></h5>
              <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" required autofocus>
            </div>
            <div class="form-group">
              <h5><label for="password">Password</label></h5>
              <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
            </div>
            <button type="submit" id="submit" name="login" type="submit" value="Login" class="btn btn-primary">Submit</button>
        </form>

        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h5><a href="register.php" style="color: #aaaaff">Click here</a> to register a new account</h5>
            </div>
        </div>

    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
