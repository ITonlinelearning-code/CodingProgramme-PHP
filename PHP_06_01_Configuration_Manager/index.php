<?php
// Configuration Manager using PHP Constants

// Define configuration constants
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'password123');
define('DB_NAME', 'myapp_db');

define('APP_NAME', 'MyPHPApp');
define('APP_VERSION', '1.0.0');
define('DEBUG_MODE', true);

// Define an array constant for supported languages
define('SUPPORTED_LANGUAGES', ['en' => 'English', 'es' => 'Spanish', 'fr' => 'French']);

// Function to display database configuration
function displayDBConfig() {
    echo "Database Configuration:\n";
    echo "Host: " . DB_HOST . "\n";
    echo "User: " . DB_USER . "\n";
    echo "Database: " . DB_NAME . "\n";
}

// Function to display app information
function displayAppInfo() {
    echo "App Information:\n";
    echo "Name: " . APP_NAME . "\n";
    echo "Version: " . APP_VERSION . "\n";
    echo "Debug Mode: " . (DEBUG_MODE ? "Enabled" : "Disabled") . "\n";
}

// Function to display supported languages
function displaySupportedLanguages() {
    echo "Supported Languages:\n";
    foreach (SUPPORTED_LANGUAGES as $code => $language) {
        echo "$code: $language\n";
    }
}

// Main execution
echo "PHP Constants - Configuration Manager\n\n";

displayDBConfig();
echo "\n";
displayAppInfo();
echo "\n";
displaySupportedLanguages();

// Demonstrating case-insensitivity (for PHP versions < 8.0)
echo "\nCase-insensitivity demonstration:\n";
echo "APP_NAME: " . APP_NAME . "\n";
echo "app_name: " . (defined('app_name') ? app_name : "Not accessible") . "\n";

// Demonstrating constants in a function (global scope)
function testConstantScope() {
    echo "\nTesting constant scope in function:\n";
    echo "APP_NAME inside function: " . APP_NAME . "\n";
}

testConstantScope();

// Error handling demonstration
echo "\nError handling demonstration:\n";
try {
    // Attempt to redefine a constant (this will trigger an error)
    define('APP_NAME', 'NewAppName');
} catch (Error $e) {
    echo "Error: " . $e->getMessage() . "\n";
}

?>