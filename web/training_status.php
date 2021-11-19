<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Training Status | BJC at Auburn</title>
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

    function check_completion($email, $course_number, $conn){
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
        <h1>Training Status</h1>

        <table class="table table-dark">
          <tr>
            <th>Student Email</th>
            <th>Student Name</th>
            <th>Course 1</th>
            <th>Course 2</th>
          </tr>
          <?php
            $sql = "SELECT * FROM users WHERE user_role='student'";
            $result = $conn->query($sql) or die($conn->error);
            while ($row = $result->fetch_assoc()) {
                echo "<tr>\n";
                echo "<td>" . $row["user_email"] . "</td>\n";
                echo "<td>" . $row["user_firstname"] . "</td>\n";
                echo "<td>" . check_completion($row["user_email"], '1', $conn) . "</td>\n";
                echo "<td>" . check_completion($row["user_email"], '2', $conn) . "</td>\n";
                echo "</tr>\n";
            }
          ?>
        </table>

    </main>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
