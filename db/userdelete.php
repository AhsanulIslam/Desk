<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    try { 
        require_once "dbcont.php"; // Include the database connection file

        $query = "delete from users where usern = :username";
        
        $stmt = $conn->prepare($query);

        $stmt->bindParam(':username', $username);
    

        $stmt->execute();

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
     
    header("Location: ../home.php");
   
}