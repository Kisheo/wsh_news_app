<?php
include("dbcon.php");

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

//echo "<pre>" . print_r($_POST, true) .  "</pre>";

$sql = "Insert into users set firstname ='$firstname', lastname='$lastname',
email='$email', username='$username', password='$password'";
if ($conn->query($sql) === TRUE) {
   echo "New record created successfully";
 } else {
   echo "Error: " . $sql . "<br>" . $conn->error;
 }

$conn->close();
?>

<p><a href='users.php'>Back to Users</a></p>