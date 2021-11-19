<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
    <?php
    require_once "session_management.php";

    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        session_destroy();
    }

    header("Location: login.php");
    ?>

    STUB LOGOUT PAGE
</body>

</html>
