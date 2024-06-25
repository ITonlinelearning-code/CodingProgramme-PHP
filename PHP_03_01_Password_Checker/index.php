<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Password Checker</title>
</head>
<body>

<?php
// A simple PHP password checker that uses PHP functions to manipulate the values of the password and output the results.

/*
  This script demonstrates basic PHP syntax, including variable declarations,
  outputting data using echo, and manipulating strings with built-in PHP functions.
*/

// Declare a variable called $password and assign it a value
$password = "Str0ngP@ssw0rd";

// Declare a variable to store the length of the password
$passwordLength = strlen($password);

// Declare a variable to store the word count in the password
$wordCount = str_word_count($password);

// Declare a variable to store the reversed password
$reversedPassword = strrev($password);

// Declare a variable to store the position of the character '0' in the password
$charPosition = strpos($password, "0");

// Declare a variable to store the password with '0' replaced by '*'
$replacedPassword = str_replace("0", "*", $password);

// Output the length of the password
echo "The length of the password is: $passwordLength <br>";

// Output the word count of the password
echo "The word count of the password is: $wordCount <br>";

// Output the reversed password
echo "The reversed password is: $reversedPassword <br>";

// Output the position of the character '0' in the password
echo "The position of '0' in the password is: $charPosition <br>";

// Output the password with '0' replaced by '*'
echo "The password with '0' replaced by '*' is: $replacedPassword <br>";

/*
// Commenting out the following line to explain the behavior when code is not executed
echo "This line will not be displayed in the browser.";
*/
?>

</body>
</html>
