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
    require_once "../session_management.php";

    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        $_SESSION['course_completed'] = '3';
        require_once "../log_course_completion.php";
    } else {
        header("Location: ../login.php");
    }

    require_once "../header.php";
    ?>

    <header>
        <h2><a href="2.php">←</a></h2>
        <img width="100px" src="/assets/bjc.png">
        <h2><a href="../courses.php">→</a></h2>
    </header>

    <main>
        <h1>How the Internet Works</h1>
        <p>Ever heard of a thing called the internet? You know, the thing you are using to access this course. Ever wonder how it worked? Computer networks are some of the most complex systems in the field. Think about cloud computing, edge computing, and the more recent work with far edge or fog computing. Think about the Internet of Things and how your cellphone and other smart devices all interconnect. Feeling a little overwhelmed? No worries, we are going to start you with the basics so you can eventually move on to the fun stuff. Let's start off with a basic introduction video.</p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/VwN91x5i25g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <p>Now that we have a high-level understading, let's focus on the basics: protocols and communication. Protocols are very very improtant part of data communication. What is Data communication? Data communications are the exchange of data between two nodes via some form of link or physical transmission medium (such as cables). There are three types of data flows that you should know: Simplex, Half Duplex, and Full Duplex. For more information, please take a look at the video below. But before you watch the video, let's discuss more about those important protocols. A protocol is a set of rules that both parties (The server and its clients) agree upon for communication. If there where no protocols, then networking nodes would not know how to communicate. Think about human language as an example. If we had not agreed upon a set of rules that define English (our protocol), then we would not be able to communicate information to each other. The sazme is true for computer networks. Let's look more into this below.</p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/ly8ikWtAY7s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <p>The next video is a advance networking topic. Now that you know about protocols and data communication, let's take a look at how the bottom-up approach to network architecture works. During this, pay special attention to how data travels among each hop in the node.</p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/iE_kY2LVBKA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <p>Now, for those students who want to take things to the next level, take a look at this advance topic video about network cryptography</p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/V67drkkk2aA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <p>We just threw a ton of information at you. Remember that you can refer back to these videos if you get confused. But lets get some hands on experience now. Please complete these labs in the order they are listed. Have fun!!</p>
        <h2>Labs</h2>
        <p>Internet Abstractions and Open Protocols Lab (Beginner) can be found <a href="https://bjc.edc.org/bjc-r/cur/programming/4-internet/1-reliable-communication/3-open-protocols.html?topic=nyc_bjc%2F4-internet.topic&course=bjc4nyc.html&novideo&noassignment">here</a>.</p>
        <p>Network Redundancy Lab (Novice) can be found <a href="https://bjc.edc.org/bjc-r/cur/programming/4-internet/1-reliable-communication/2-network-redundancy.html?topic=nyc_bjc%2F4-internet.topic&course=bjc4nyc.html&novideo&noassignment">here</a>.</p>
        <p>Public Key Encryption Lab (Advanced) can be found <a href="https://bjc.edc.org/bjc-r/cur/programming/4-internet/2-cybersecurity/3-asymmetric_cryptography.html?topic=nyc_bjc%2F4-internet.topic&course=bjc4nyc.html&novideo&noassignment">here</a>.</p>
    </main>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
