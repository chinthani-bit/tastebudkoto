<?php
// db.php - Database connection
$host = 'localhost';
$dbname = 'wp_bbcap25_14'; 
$username = 'bbcap25_14';     
$password = 'SsFzNlPV';     

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>