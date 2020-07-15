<?php


$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "test";


// Create connection

$connection = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

// Check connection

if (!$connection) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
 
$sql = INSERT INTO users (FirstName, LastName, Email)
VALUES ("test", "Doe", "Email");
if (mysqli_query($connection, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}
mysqli_close($connection);

?>