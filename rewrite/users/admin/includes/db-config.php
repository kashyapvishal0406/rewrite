<?php

// Database configuration
$hostname = 'localhost';     // MySQL server hostname (usually 'localhost')
$username = 'mysql_user009'; // MySQL username
$password = 'mysql_user009#@'; // MySQL password
$database = 'fintech_2'; // MySQL database name

// Create a new MySQLi connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

?>
