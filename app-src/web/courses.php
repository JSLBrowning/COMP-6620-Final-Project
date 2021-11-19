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

    function check_completion($course_number, $conn){
        $email = $_SESSION['user_email'];
        $sql = "SELECT * FROM course_completions WHERE user_email = '$email' AND course_number = $course_number";
        $result = $conn->query($sql) or die($conn->error);
        $numrows = $result->num_rows;
        if ($numrows > 0) {
           return '<img src="../../assets/checkmark.png" width="24" height="24">';
        }
        return '';
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
                <h2>
                <?php echo (check_completion('1', $conn)); ?>
                I. Abstraction</h2>
                <p>Learn about one of the fundamental concepts of computational thinking.</p>
            </div>
        </a>
        <a href="courses/2.php">
            <div class="courselink" href="courses/2.php">
                <h2>
                <?php echo (check_completion('2', $conn)); ?>
                II. Data Structures</h2>
                <p>Learn about the various ways computers structure data in memory.</p>
            </div>
        </a>
        <a href="courses/3.php">
            <div class="courselink" href="courses/3.php">
                <h2>
                <?php echo (check_completion('3', $conn)); ?>
                III. How the Internet Works</h2>
                <p>Learn how the world's many devices are interconnected.</p>
            </div>
        </a>
    </main>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
