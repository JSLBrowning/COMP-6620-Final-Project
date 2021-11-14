<!DOCTYPE html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Super dumb BJC app</title>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>

<body>
<?php
require __DIR__.'/vendor/autoload.php';
use Kreait\Firebase\Factory;

session_start();

$factory = (new Factory)->withServiceAccount('comp6620-firebase-adminsdk-hy5j8-f3b27fb448.json');

$auth = $factory->createAuth();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $signInResult = $auth->signInWithEmailAndPassword($email, $password);
        echo 'Logged in with UID = ' . $signInResult->firebaseUserId();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $signInResult->firebaseUserId();
        header("Location: index.php");
    } catch (Exception $e) {
        echo 'Could not log in for some reason. <br />';
        echo 'Exception: ',  $e->getMessage(), "\n";
    }
}

?>

<div class="container" style="margin-top: 50px;">
    <h4 class="text-center">Super dumb BJC app</h4><br>
    <h5>Enter email and password to login</h5>

    <div class="card card-default">
        <div class="card-body">
            <form id="login" class="form-inline" method="POST" action="">
                <div class="form-group mb-2">
                    <label for="email" class="sr-only">Name</label>
                    <input id="email" type="email" class="form-control" name="email"   placeholder="Email" required autofocus>
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <label for="password" class="sr-only">Email</label>
                    <input id="password" type="text" class="form-control" name="password" placeholder="Password" required autofocus>
                </div>
                <input id="submit" name="submit" type="submit" value="Login" class="btn btn-primary mb-2">
            </form>
        </div>
    </div>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
