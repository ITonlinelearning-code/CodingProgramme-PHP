<?php
// User Profile System using PHP Conditional Statements

// Function to get current hour (0-23)
function getCurrentHour() {
    return date('G');
}

// Function to determine greeting based on time of day
function getGreeting($hour) {
    if ($hour >= 5 && $hour < 12) {
        return "Good morning";
    } elseif ($hour >= 12 && $hour < 18) {
        return "Good afternoon";
    } elseif ($hour >= 18 && $hour < 22) {
        return "Good evening";
    } else {
        return "Good night";
    }
}

// Function to check user age and return appropriate message
function getAgeMessage($age) {
    if ($age < 13) {
        return "Sorry, you must be at least 13 years old to use this system.";
    } elseif ($age >= 13 && $age < 18) {
        return "Welcome, teenager! Some content may be restricted.";
    } elseif ($age >= 18 && $age < 65) {
        return "Welcome, adult user!";
    } else {
        return "Welcome, senior user! We hope you enjoy your experience.";
    }
}

// Function to determine user type based on login count
function getUserType($loginCount) {
    switch (true) {
        case $loginCount == 1:
            return "New User";
        case $loginCount > 1 && $loginCount <= 5:
            return "Beginner";
        case $loginCount > 5 && $loginCount <= 20:
            return "Regular User";
        case $loginCount > 20:
            return "Expert User";
        default:
            return "Unknown User Type";
    }
}

// Simulated user data (in a real system, this would come from a database)
$userName = "John Doe";
$userAge = 25;
$loginCount = 10;

// Get current hour and appropriate greeting
$currentHour = getCurrentHour();
$greeting = getGreeting($currentHour);

// Get age-specific message
$ageMessage = getAgeMessage($userAge);

// Get user type based on login count
$userType = getUserType($loginCount);

// Output user profile information
echo "<h1>User Profile</h1>\n";
echo "<p>{$greeting}, {$userName}!</p>\n";
echo "<p>Current Time: " . date('h:i A') . "</p>\n";
echo "<p>Age: {$userAge}</p>\n";
echo "<p>Message: {$ageMessage}</p>\n";
echo "<p>User Type: {$userType}</p>\n";
echo "<p>Login Count: {$loginCount}</p>\n";

// Additional feature based on user type
if ($userType == "Expert User") {
    echo "<p>Congratulations! You've unlocked expert features.</p>\n";
} elseif ($userType == "Regular User" || $userType == "Beginner") {
    $loginsTillExpert = 21 - $loginCount;
    echo "<p>Keep logging in! You need {$loginsTillExpert} more logins to become an Expert User.</p>\n";
} else {
    echo "<p>Welcome! We hope you enjoy using our system.</p>\n";
}
?>