<?php

$servername = "localhost";
$username = "lux";
$password = "lux";
$dbname = "luxdb";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
?>
