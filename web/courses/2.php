<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Data Structures | BJC at Auburn</title>
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
        <h2><a href="1.php">←</a></h2>
        <img width="100px" src="/assets/bjc.png">
        <h2><a href="../courses.php">→</a></h2>
    </header>

    <main>
        <h1>Data Structures</h1>
        <p>Data Structures is a critical part of any programmers lives. Data Structures can range from extremly simple single variable structs, to much more complex data strutures found at lowest levels of Operating System code. In the video and summary below, we will quickly go over some of the most basic concepts.</p>
        <p>Lets first look at an example: We have a map that contains stores, schools, intersections, and roads. Each road can be either single-directional or bi-directional. Additional, each member of the struct has a longitunal location assiged to it. So we need to design some kind of structure that tells us about the map layout. Below lets look at what needs to be inside of this structure.</p>
        <p>First, we will have a type that tells us what type of map object we are looking at. Is it a road, an intersection, a house, or a school. Next, we need a type that tells us the location of the map object. We also need a type that tells us whether the map_object can go forwards, backwards, or both directions (bi-directional). Now we have a very simple 3 variable structure, with each variable representing a peice of the map. But this only tells us about one object on the map. So how de we store all of the objects for a given map? There would be two ways to do this. Either through a linked-list or through a hashmap. Regardless of which of this two appraoches you take, you now have a data structure that can be used to progam a 3D map or possibly even calculate the shortest path from A to B. You may even be able to use this as a rudimentary GPS program!! See the power of a simple data structure now? Go ahead and watch the video below for a much more in-depth explaination.</p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/bum_19loj9A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <p>Now lets take a look at intergers, arrays, and memory! One of the most common struture you will use is an integer array. Please watch the below video to learn more about how integer arrays are used and how they are stored in memory</p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/pmN9ExDf3yQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <p>Having fun yet? Good! Now lets jump into some basics around how we can use class objects to create structs in Java and Python!</p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/8yjkWGRlUmY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <p>We just threw a ton of information at you. Remember that you can refer back to these videos if you get confused. But lets get some hands on experience now. Please complete these labs in the order they are listed. Have fun!!</p>
        <h2>Labs</h2>
        <p>Robot in a Maze Lab(Beginner) can be found <a href="https://bjc.edc.org/bjc-r/cur/programming/3-lists/1-abstraction/1-robot-in-a-maze.html?topic=nyc_bjc%2F3-lists.topic&course=bjc4nyc.html&novideo&noassignment">here</a>.</p>
        <p>Nested Triangle Abstraction Lab(Novice) can be found <a href="https://bjc.edc.org/bjc-r/cur/programming/3-lists/1-abstraction/3-fractal-art-recursive.html?topic=nyc_bjc%2F3-lists.topic&course=bjc4nyc.html&novideo&noassignment">here</a>.</p>
        <p>Tic-Tac-Toe Lab(Advanced) can be found <a href="https://bjc.edc.org/bjc-r/cur/programming/3-lists/3-tic-tac-toe/1-find-ties.html?topic=nyc_bjc%2F3-lists.topic&course=bjc4nyc.html&novideo&noassignment">here</a>.</p>
    </main>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
