<?php
session_start();

$dbservername = "sh2.hostrocket.com";
$dbusername = "dgbrown_bjc";
$dbpassword = "COMP6620isfun";

// Create connection
$conn = new mysqli($dbservername, $dbusername, $dbpassword);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully <br/>";

$conn->select_db("dgbrown_bjc");
?>
