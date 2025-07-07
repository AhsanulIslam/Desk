<?php
// Database connection details
$dsn = "mysql:host=localhost;dbname=devtechp";  // DSN (Data Source Name)
$dbusername = "root";                          // Database username
$dbpassword = "";                              // Database password

try {
    // Create a new PDO instance
    $conn = new PDO($dsn, $dbusername, $dbpassword);

    // Set PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // echo "✅ Connected successfully!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>