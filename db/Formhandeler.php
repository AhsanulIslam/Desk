<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    try { 
        require_once "dbcont.php"; // Include the database connection file

        $query = "INSERT INTO users(usern, pwd, email) values( ?, ?, ?)";
        $stmt = $conn->prepare($query);

        $stmt->execute([$username, $password, $email]);

        $conn = null; // Close the database connection
        $stmt = null; // Close the prepared statement

        header("Location: ../home.php"); // Redirect to home page after successful insertion

        die();
        
    }
    catch (Exception $e) {
        die("Query Failed : " . $e-> getMessage());

    }
}
else {
     echo "sign up successfully";
    header("Location: ../home.php");
   
}