<?php
session_start();
require_once "dbcont.php";

$user = ['id' => '', 'usern' => '', 'email' => ''];
$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['search'])) {
        $id = $_POST['id'];
        if (!empty($id)) {
            try {
                $stmt = $conn->prepare("SELECT * FROM users WHERE id = :id");
                $stmt->bindParam(":id", $id, PDO::PARAM_INT);
                $stmt->execute();
                $result = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($result) {
                    $user = $result;
                    $message = "User loaded successfully!";
                } else {
                    $message = "❌ No user found with ID: $id";
                }
            } catch (Exception $e) {
                $message = "❌ Search failed: " . $e->getMessage();
            }
        } else {
            $message = "⚠️ Please enter a valid ID.";
        }
    } elseif (isset($_POST['update'])) {
        $id = $_POST['id'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (!empty($id) && !empty($username) && !empty($email)) {
            try {
                if (!empty($password)) {
                    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                    $query = "UPDATE users SET usern = :username, pwd = :pwd, email = :email WHERE id = :id";
                } else {
                    $query = "UPDATE users SET usern = :username, email = :email WHERE id = :id";
                }

                $stmt = $conn->prepare($query);
                $stmt->bindParam(":username", $username);
                $stmt->bindParam(":email", $email);
                $stmt->bindParam(":id", $id, PDO::PARAM_INT);
                if (!empty($password)) {
                    $stmt->bindParam(":pwd", $hashedPassword);
                }

                $stmt->execute();
                $message = "✅ User updated successfully!";
                $user = ['id' => $id, 'usern' => $username, 'email' => $email];
            } catch (Exception $e) {
                $message = "❌ Update failed: " . $e->getMessage();
            }
        } else {
            $message = "⚠️ ID, Username, and Email are required.";
        }
    }

    $_SESSION['user'] = $user;
    $_SESSION['message'] = $message;
    header("Location: ../home.php");
    exit;
}