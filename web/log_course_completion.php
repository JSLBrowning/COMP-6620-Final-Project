<?php
$email = $_SESSION['user_email'];
$completion = $_SESSION['course_completed'];
$sql = "SELECT * FROM course_completions WHERE user_email = '$email' AND course_number = $completion";
$result = $conn->query($sql) or die($conn->error);
$numrows = $result->num_rows;
if ($numrows == 0) {
    $sql = "INSERT INTO course_completions (user_email, course_number, completed) VALUES ('$email', '$completion', '1')";
    $result = $conn->query($sql) or die($conn->error);
}
