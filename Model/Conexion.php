<?php
$servername = "localhost";
$database = "databasename";
$username = "username";
$password = "password";
// Create connection
$conn = mysqli_connect($servername, $database, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>