<?php

// Connection info
$host = 'localhost';
$username = 'root';
$password = 'root';
$db_name = 'hotel';

// Open Connection
$conn = new mysqli($host, $username, $password, $db_name);
var_dump($conn);

// Check
if($conn && $conn->connect_error) {
    echo "Error connecting to DB";
}    