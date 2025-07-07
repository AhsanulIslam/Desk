<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fname = htmlspecialchars($_POST['fname']);
            $lname = htmlspecialchars($_POST['lname']);
            $email = htmlspecialchars($_POST['email']);
            $country = htmlspecialchars($_POST['country']);

            if(empty ($fname) || empty($lname) || empty($email) || empty($country)) {
                echo "<h2>All fields are required.</h2>";
                header("Location: index.php");
                exit();
            }

            echo "<h2>Your Input:</h2>";
            echo "First Name: " . $fname . "<br>";
            echo "Last Name: " . $lname . "<br>";
            echo "Email: " . $email . "<br>";
            echo "Country: " . $country . "<br>";

            
        }
        else {
            echo "<h2>Please fill out the form.</h2>";
        }
    ?>
</body>
</html>