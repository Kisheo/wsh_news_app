<?php
$servername = "localhost";
$username = "admin";
$password = "support12019!";
$dbname = "wsh_app";


$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>