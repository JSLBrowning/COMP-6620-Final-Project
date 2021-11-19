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
    <link rel="stylesheet" href="/css/main.css">
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
        <h2><a href="web/courses/1.php">←</a></h2>
        <img width="100px" src="/assets/bjc.png">
        <h2><a href="web/courses/3.php">→</a></h2>
    </header>

    <main>
        <h1>Data Structures</h1>
        <h2>Lesson One</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est numquam rem ipsa distinctio possimus quasi molestiae repellat, et enim, labore, cum quibusdam! Fugiat, facere? Quas fugit mollitia dolor possimus similique.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est numquam rem ipsa distinctio possimus quasi molestiae repellat, et enim, labore, cum quibusdam! Fugiat, facere? Quas fugit mollitia dolor possimus similique.</p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/_y-5nZAbgt4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est numquam rem ipsa distinctio possimus quasi molestiae repellat, et enim, labore, cum quibusdam! Fugiat, facere? Quas fugit mollitia dolor possimus similique.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est numquam rem ipsa distinctio possimus quasi molestiae repellat, et enim, labore, cum quibusdam! Fugiat, facere? Quas fugit mollitia dolor possimus similique.</p>
    </main>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
