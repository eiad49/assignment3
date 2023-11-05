<!DOCTYPE html>
<html>
<head>
    <title>Number Calculator</title>
</head>
<body>
    <h2>Number Calculator</h2>
    <form action="" method="post">
        <label for="num1">Number 1:</label>
        <input type="text" name="num1" id="num1" required><br>
        <label for="num2">Number 2:</label>
        <input type="text" name="num2" id="num2" required><br>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        // Check if both inputs are numeric
        if (is_numeric($num1) && is_numeric($num2)) {
            echo "<h3>Results:</h3>";
            echo "Sum: " . ($num1 + $num2) . "<br>";
            echo "Difference: " . ($num1 - $num2) . "<br>";
            echo "Product: " . ($num1 * $num2) . "<br>";
            
            if ($num2 != 0) {
                echo "Quotient: " . ($num1 / $num2) . "<br>";
            } else {
                echo "Cannot divide by zero.<br>";
            }
        } else {
            echo "Please enter valid numeric values.";
        }
    }
    ?>
</body>
</html>
