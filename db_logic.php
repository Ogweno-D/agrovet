<?php

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define your MySQL database connection details
    $dbServer = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "agrovet";

    // Create a database connection
    $conn = new mysqli($dbServer, $dbUsername, $dbPassword, $dbName);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}
?>
