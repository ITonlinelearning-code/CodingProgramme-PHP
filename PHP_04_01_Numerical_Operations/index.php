<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Numerical Operations Calculator</title>
</head>
<body>

<?php
// A PHP script to perform arithmetic operations, data type conversions, and handle large and infinite numbers.

/* 
    This script prompts the user for two numbers, performs various arithmetic operations,
    converts data types, handles large and infinite numbers, and displays the results.
*/

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user inputs
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    // Error handling for non-numeric inputs
    if (!is_numeric($num1) || !is_numeric($num2)) {
        echo "Please enter valid numbers.<br>";
    } else {
        // Convert user inputs to float for arithmetic operations
        $num1 = (float)$num1;
        $num2 = (float)$num2;

        // Arithmetic operations
        $addition = $num1 + $num2;
        $subtraction = $num1 - $num2;
        $multiplication = $num1 * $num2;
        $division = $num1 / $num2;
        $modulus = $num1 % $num2;

        // Display arithmetic operations results
        echo "Addition: $num1 + $num2 = $addition <br>";
        echo "Subtraction: $num1 - $num2 = $subtraction <br>";
        echo "Multiplication: $num1 * $num2 = $multiplication <br>";
        echo "Division: $num1 / $num2 = $division <br>";
        echo "Modulus: $num1 % $num2 = $modulus <br>";

        // Data type conversions
        $intNum1 = (int)$num1;
        $intNum2 = (int)$num2;
        $floatNum1 = (float)$num1;
        $floatNum2 = (float)$num2;

        // Check data types
        $isInt1 = is_int($intNum1);
        $isInt2 = is_int($intNum2);
        $isFloat1 = is_float($floatNum1);
        $isFloat2 = is_float($floatNum2);

        // Display data type conversions and checks
        echo "Integer conversion of num1: $intNum1, is integer: " . ($isInt1 ? 'true' : 'false') . "<br>";
        echo "Integer conversion of num2: $intNum2, is integer: " . ($isInt2 ? 'true' : 'false') . "<br>";
        echo "Float conversion of num1: $floatNum1, is float: " . ($isFloat1 ? 'true' : 'false') . "<br>";
        echo "Float conversion of num2: $floatNum2, is float: " . ($isFloat2 ? 'true' : 'false') . "<br>";

        // Handling large and infinite numbers
        $large_number = 1e+300;
        $infinite_number = 1e+309;

        $isLargeFinite = is_finite($large_number);
        $isInfinite = is_infinite($infinite_number);

        // Display large and infinite numbers check results
        echo "Large number: $large_number, is finite: " . ($isLargeFinite ? 'true' : 'false') . "<br>";
        echo "Infinite number: $infinite_number, is infinite: " . ($isInfinite ? 'true' : 'false') . "<br>";
    }
}
?>

<!-- HTML form to get user inputs -->
<form method="post" action="">
    <label for="num1">Enter first number:</label>
    <input type="text" id="num1" name="num1"><br><br>
    <label for="num2">Enter second number:</label>
    <input type="text" id="num2" name="num2"><br><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>
