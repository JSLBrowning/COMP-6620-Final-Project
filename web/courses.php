<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Courses | BJC at Auburn</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/courses.css">
    <link rel="shortcut icon" href="/assets/bjc.png" />
</head>

<body>
    <?php
    require_once "session_management.php";

    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        // echo "LOGGED IN";
    } else {
        header("Location: login.php");
    }

    require_once "header.php";
    ?>

    <header>
        <img width="100px" src="/assets/bjc.png">
    </header>

    <main>
        <h1>Courses</h1>
        <a href="courses/1.php">
            <div class="courselink" href="courses/1.php">
                <h2>I. Abstraction</h2>
                <p>Learn about one of the fundamental concepts of computational thinking.</p>
            </div>
        </a>
        <a href="courses/2.php">
            <div class="courselink" href="courses/2.php">
                <h2>II. Data Structures</h2>
                <p>Learn about the various ways computers structure data in memory.</p>
            </div>
        </a>
    </main>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
