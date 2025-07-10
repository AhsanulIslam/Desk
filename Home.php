<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

      <link rel="stylesheet" href="style/style.css">
</head>
<body>
 
      <div class="center-box">
 <!-- <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">  -->


      <!-- <form action="index.php" method="post">
        <label for="fname">First Name:</label>
        <input type="text" id="fname" name="fname" placeholder="Your first name..." >
        <br>   

        <label for="lname">Last Name:</label>
        <input type="text" id="lname" name="lname" placeholder="Your last name..." >
        <br>

        <label for="email">Email:</label>    
        <input type="email" id="email" name="email" placeholder="Your email..." >
        <br>

        <label for="country">Country:</label>
        <select id="country" name="country" >
            <option value="">--Select--</option>
            <option value="Australia">Australia</option>
            <option value="Canada">Canada</option>
            <option value="USA">USA</option>
            <option value="UK">UK</option>
            <option value="India">India</option>    
        </select>
        <br><br>

        <input type="submit" value="Submit" class="submit"
     </form> -->

     <h3>Sign Up</h3>
     <form action="db/Formhandeler.php" method="post">
      <input type="text" name="username" placeholder="Username">
      <input type="password" name="password" placeholder="Password">
      <input type="email" name="email" placeholder="Email">
      <button>Signup</button>
     </form>

      
     
        <h3>Update User</h3>

        <?php
        session_start();
        $user = $_SESSION['user'] ?? ['id' => '', 'usern' => '', 'email' => ''];
        $message = $_SESSION['message'] ?? '';
        unset($_SESSION['user'], $_SESSION['message']);
        ?>

        <?php if ($message): ?>
            <p style="color:red"><?= htmlspecialchars($message) ?></p>
        <?php endif; ?>

        <form action="db/userupdate.php" method="post">
            <input type="number" name="id" placeholder="ID" value="<?= htmlspecialchars($user['id']) ?>"><br><br>
            <input type="text" name="username" placeholder="Username" value="<?= htmlspecialchars($user['usern']) ?>"><br><br>
            <input type="password" name="password" placeholder="Password (leave blank to keep current password)"><br><br>
            <input type="email" name="email" placeholder="Email" value="<?= htmlspecialchars($user['email']) ?>"><br><br>

            <button type="submit" name="search">Search</button>
            <button type="submit" name="update">Update</button>
        </form>

        

     <h3>Delete User</h3>
     <form action="db/userdelete.php">
      <input type="text" name="username" placeholder="Username">
      <button>Delete</button>
     </form>



   
<!-- 
    <?php
    // if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['fname'])) {
    //     $fname = $_POST['fname'];
    //     $lname = $_POST['lname'];
    //     $email = $_POST['email'];
    //     $country = $_POST['country'];

    //     echo "<h2>Your Input:</h2>";
    //     echo "First Name: $fname<br>";
    //     echo "Last Name: $lname<br>";
    //     echo "Email: $email<br>";
    //     echo "Country: $country<br>";
    // }
    ?> -->
 </div>

 <!-- <?php


            // for($i=0; $i<10; $i++){
                
            //     echo "This is iteration number $i <br>";
            // }
            // function myfun(){
            //     $localvar = "This is a local variable";
            //     echo $localvar;
            // }

            // myfun(); // Call the function to display the local variable
                                  
?> -->


</body>
</html>


<!-- 
CREATE TABLE users (
id INT(5) NOT NULL AUTO_INCREMENT,
usern VARCHAR(30) NOT NULL,
pwd VARCHAR(255) NOT NULL,
email VARCHAR(100) NOT NULL,
created_at DATETIME NOT NULL DEFAULT CURRENT_TIME,
PRIMARY KEY (id)
); -->