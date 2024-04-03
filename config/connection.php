<?php
    // Database credentials
    $host = 'localhost'; // Change this to your database host
    $dbname = 'project_management';
    $username = 'root'; 
    $password = ''; 

    try {
        // Creating a new PDO instance
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

        // Set PDO to throw exceptions on error
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //echo "Connected successfully";
    } catch (PDOException $e) {
        // If connection fails, catch the exception and display error message
        echo "Connection failed: " . $e->getMessage();
    }
?>
