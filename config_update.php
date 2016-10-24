<?php
$servername = "sql.njit.edu";
$username = "DKL9";
$password = "8yx5VMy2x";
$dbname = "dkl9";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>
