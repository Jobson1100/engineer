<?php
// Connect to your database (replace with your credentials)
$conn = new mysqli("localhost", "root", "", "project");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from your database
$sql = "SELECT success, incomplete, fails FROM progress";
$result = $conn->query($sql);

// Convert the result into an associative array
$data = $result->fetch_assoc();

// Close the database connection
$conn->close();
?>
