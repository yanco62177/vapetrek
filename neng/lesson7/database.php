<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "bungabong";

 $conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>