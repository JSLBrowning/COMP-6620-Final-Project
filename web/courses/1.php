<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Abstraction | BJC at Auburn</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="shortcut icon" href="/assets/bjc.png" />
</head>

<body>
    <?php
    require_once "../../web/header.php";
    /*
    require_once "/../../web/session_management.php";

    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        // echo "LOGGED IN";
    } else {
        header("Location: /../web/login.php");
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        session_destroy();
        header("Location: /../../web/index.php");
    }

    require_once "/../../web/header.php";
    */
    ?>

    <header>
        <h2><a href="/web/courses.php">←</a></h2>
        <img width="100px" src="/assets/bjc.png">
        <h2><a href="/web/courses/2.php">→</a></h2>
    </header>

    <main>
        <h1>Abstraction</h1>
        <h2>Lesson One</h2>
        <p>One of the concepts most fundamental to computational thinking is <strong>abstraction</strong>, the removal of certain physical details of an object to allow easier focus on the details of immediate importance. Abstraction can be thought of as <strong>generalization</strong> for the purposes of creating <strong>models</strong> usable in programming applications.</p>
        <h3>Video One</h3>
        <p>Abstraction is summarized well in this video from Codexpanse.</p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/_y-5nZAbgt4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <h2>Lab One</h2>
        <p>A lab on abstraction can be found <a href="https://bjc.edc.org/bjc-r/cur/programming/2-complexity/1-variables-games/1-number-guessing-game.html?topic=nyc_bjc%2F2-conditionals-abstraction.topic&course=bjc4nyc.html&novideo&noassignment">here</a>.</p>
    </main>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
