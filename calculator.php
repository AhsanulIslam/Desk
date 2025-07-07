<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Calculator</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <h2>Online Calculator</h2>
        <label for="num1">Number 1:</label>
        <input type="text" id="num1" name="num1" placeholder="Enter first number..." value="<?php echo isset($_POST['num1']) ? htmlspecialchars($_POST['num1']) : ''; ?>">
        <br><br>

        <label for="num2">Number 2:</label>
        <input type="text" id="num2" name="num2" placeholder="Enter second number..." value="<?php echo isset($_POST['num2']) ? htmlspecialchars($_POST['num2']) : ''; ?>">
        <br><br>

        <label for="operation">Operation:</label>
        <select id="operation" name="operation">
            <option value="">--Select--</option>
            <option value="add" <?php if (isset($_POST['operation']) && $_POST['operation'] == 'add') echo 'selected'; ?>>Add</option>
            <option value="subtract" <?php if (isset($_POST['operation']) && $_POST['operation'] == 'subtract') echo 'selected'; ?>>Subtract</option>
            <option value="multiply" <?php if (isset($_POST['operation']) && $_POST['operation'] == 'multiply') echo 'selected'; ?>>Multiply</option>
            <option value="divide" <?php if (isset($_POST['operation']) && $_POST['operation'] == 'divide') echo 'selected'; ?>>Divide</option>
        </select>
        <br><br>

        <input type="submit" value="Calculate" class="submit">
    </form>

    <?php 

//   $num1 = filter_input(INPUT_POST, "num1", FILTER_SANITIZE_NUMBER_FLOAT);
//         $num2 = filter_input(INPUT_POST, "num2", FILTER_SANITIZE_NUMBER_FLOAT);
//         $operation = filter_input(INPUT_POST, "operation", FILTER_SANITIZE_STRING);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = trim($_POST["num1"]);
        $num2 = trim($_POST["num2"]);
        $operation = $_POST["operation"];
        $Error = false;

        // Check for blank values (but allow zero)
        if ($num1 === '' || $num2 === '' || $operation === '') {
            echo "<p style='color: red;'>Please fill in all fields.</p>";
            $Error = true;
        } 
        elseif (!is_numeric($num1) || !is_numeric($num2)) {
            echo "<p style='color: red;'>Please enter valid numbers.</p>";
            $Error = true;
        }

        if (!$Error) {
            $num1 = (float)$num1;
            $num2 = (float)$num2;

            switch ($operation) {
                case 'add':
                    $result = $num1 + $num2;
                    break;
                case 'subtract':
                    $result = $num1 - $num2;
                    break;
                case 'multiply':
                    $result = $num1 * $num2;
                    break;
                case 'divide':
                    if ($num2 == 0) {
                        echo "<p style='color: red;'>Cannot divide by zero.</p>";
                        exit;
                    }
                    $result = $num1 / $num2;
                    break;
                default:
                    echo "<p style='color: red;'>Invalid operation selected.</p>";
                    exit;
            }

            echo "<p><strong>Result:</strong> " . htmlspecialchars($result) . "</p>";
        }
    }
    ?>
</body>
</html>
