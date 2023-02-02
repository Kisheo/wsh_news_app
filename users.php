<?php
include("dbcon.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>

<p><a href='users_add.php'>Add User</a></p>
<table border='1'>
<?php
$sql = "SELECT id, firstname, lastname, email, username FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{

   echo "<th>First Name</th>";
   echo "<th>Last Name</th>";
   echo "<th>Email</th>";
   echo "<th>Username</th>";
   
  // output data of each row
  	while($row = $result->fetch_assoc()) 
	{
    	echo "<tr>";
      echo "<td>" . $row['firstname'] . "</td>";
      echo "<td>" . $row['lastname'] . "</td>";
      echo "<td>" . $row['email'] . "</td>";
      echo "<td>" . $row['username'] . "</td>";
      echo "</tr>";
  	}
} 
else 
{
  	echo "0 results";
}
$conn->close();
?>
<table>
</body>
</html>
