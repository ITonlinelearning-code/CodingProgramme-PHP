<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic PHP Calculator</title>
</head>
<body>

<?php
// A simple calculator that uses a function to add two variables with numerical values,
// and then outputs the sum of these two values in an HTML format.

/*
  This script demonstrates basic PHP syntax, including function and variable declarations,
  outputting data using echo, and simple PHP arithmetic.
*/

// Define a function named addNumbers
function addNumbers() {
    // Declare a variable to store the first number
    $num1 = 10;

    // Declare a variable to store the second number
    $num2 = 25;

    // Declare a variable to store the sum of num1 and num2
    $sum = $num1 + $num2;

    // Output the values of num1, num2, and sum as HTML markup
    echo "<h2>The sum of " . $num1 . " and " . $num2 . " is: " . $sum . "</h2>";
}

// Call the addNumbers function to execute the code inside it
addNumbers();

// Commenting out the following line to explain the behavior when code is not executed
// echo "This line will not be displayed in the browser.";
?>

</body>
</html>
