<?php
$servername = "localhost";
$username = "ajay";
$password ="12345";

// Create connection
$conn = new mysqli($servername, $username, $password,"login");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>