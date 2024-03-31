<?php
// Database credentials
$host = 'localhost'; // Change this to your database host
$dbname = 'project_management';
$username = 'root'; 
$password = ''; 

try {
    // Creating a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Set PDO to throw exceptions on error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Optional: Set default fetch mode to associative array
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // Optionally, set character encoding to UTF-8
    $pdo->exec("set names utf8");

    echo "Connected successfully";
} catch (PDOException $e) {
    // If connection fails, catch the exception and display error message
    echo "Connection failed: " . $e->getMessage();
}
?>
