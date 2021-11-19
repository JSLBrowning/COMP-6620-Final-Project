<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BJC for COMP6620</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="/assets/bjc.png" />
</head>

<body>
    <?php
    require_once "web/session_management.php";

    // No one is intended to stay on this page. Redirect them as appropriate.
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        if ($_SESSION['user_role'] == 'teacher'){
            header("Location: web/training_status.php");
        }
        else {
            header("Location: web/courses.php");
        }
    } else {
        header("Location: web/login.php");
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        session_destroy();
        header("Location: web/index.php");
    }

    require_once "web/header.php";
    ?>

    <div class="container" style="margin-top: 75px;">
        <h4 class="text-center">Super dumb BJC app</h4><br>
        <h5>Welcome to BJC. If you see this, you are logged in.</h5>

        <form id="logout" class="form-inline" method="POST" action="">
            <input id="submit" name="submit" type="submit" value="Logout" class="btn btn-primary mb-2">
        </form>

    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
