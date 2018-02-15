<?php
$servername = "localhost";
$username = ini_get("mysql.default_user") ;
$password = ini_get("mysql.default_password") ;

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>