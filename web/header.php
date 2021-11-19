<?php
require_once "session_management.php";
?>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="/web/courses.php"><img width="35px" src="/assets/bjc.png"></a>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link"
        <?php
        if (isset($_SESSION['user_role']) && ($_SESSION['user_role'] == 'teacher')){
            echo 'href="/web/training_status.php"';
        }
        else {
            echo 'href="/web/courses.php"';
        }
        ?> >Home <span class="sr-only">(current)</span></a>

      </li>
      <li class="nav-item">
        <a class="nav-link" href="/web/logout.php">Logout</a>
      </li>
    </ul>
    <?php
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
      echo "<p class='text-white'>Welcome, " . $_SESSION['user_firstname'] . "</p>";
    }
    ?>
    <!---    <form class="form-inline mt-2 mt-md-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn my-2 my-sm-0" type="submit">Search</button>
    </form> --->
  </div>
</nav>
