<?php
// db.php - Database connection
$host = 'localhost';
$dbname = 'wp_bbcap25_14'; 
$username = 'bbcap25_14';     
$password = 'SsFzNlPV';     

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>