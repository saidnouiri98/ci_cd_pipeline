<?php
// Replace these variables with your actual database credentials
$servername = "db";
$username = "admin";
$password = "admin";
$dbname = "employer";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
