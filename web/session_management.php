<?php
session_start();

require_once "dbcreds.php";

// Create connection
$conn = new mysqli($dbservername, $dbusername, $dbpassword);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully <br/>";

$conn->select_db("dgbrown_bjc");

?>
