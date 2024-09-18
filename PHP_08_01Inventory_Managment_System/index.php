<?php
// Inventory Management System using PHP Loops

// Sample inventory data
$inventory = [
    'apple' => ['name' => 'Apple', 'quantity' => 150, 'price' => 0.50],
    'banana' => ['name' => 'Banana', 'quantity' => 200, 'price' => 0.30],
    'orange' => ['name' => 'Orange', 'quantity' => 100, 'price' => 0.60],
    'mango' => ['name' => 'Mango', 'quantity' => 75, 'price' => 1.20],
    'grape' => ['name' => 'Grape', 'quantity' => 80, 'price' => 2.00]
];

// Function to display inventory
function displayInventory($inventory) {
    echo "Current Inventory:\n";
    echo str_repeat('-', 50) . "\n";
    echo sprintf("%-15s %-15s %-15s %s\n", "Item", "Quantity", "Price", "Total Value");
    echo str_repeat('-', 50) . "\n";

    $totalInventoryValue = 0;

    foreach ($inventory as $item) {
        $totalValue = $item['quantity'] * $item['price'];
        $totalInventoryValue += $totalValue;
        echo sprintf("%-15s %-15d $%-14.2f $%.2f\n", 
            $item['name'], 
            $item['quantity'], 
            $item['price'], 
            $totalValue
        );
    }

    echo str_repeat('-', 50) . "\n";
    echo sprintf("Total Inventory Value: $%.2f\n", $totalInventoryValue);
}

// Function to update inventory
function updateInventory(&$inventory, $item, $quantity) {
    if (array_key_exists($item, $inventory)) {
        $inventory[$item]['quantity'] += $quantity;
        echo "Updated {$inventory[$item]['name']} quantity. New quantity: {$inventory[$item]['quantity']}\n";
    } else {
        echo "Item not found in inventory.\n";
    }
}

// Function to find items below threshold
function findLowStock($inventory, $threshold) {
    echo "Items with stock below $threshold:\n";
    $lowStockItems = [];

    foreach ($inventory as $key => $item) {
        if ($item['quantity'] < $threshold) {
            $lowStockItems[$key] = $item;
        }
    }

    if (empty($lowStockItems)) {
        echo "No items below the threshold.\n";
    } else {
        foreach ($lowStockItems as $item) {
            echo "{$item['name']}: {$item['quantity']}\n";
        }
    }
}

// Function to apply discount
function applyDiscount(&$inventory, $discountPercent) {
    echo "Applying {$discountPercent}% discount to all items:\n";

    foreach ($inventory as &$item) {
        $originalPrice = $item['price'];
        $item['price'] *= (1 - $discountPercent / 100);
        echo sprintf("%s: $%.2f -> $%.2f\n", $item['name'], $originalPrice, $item['price']);
    }
}

// Main program
echo "Welcome to the Inventory Management System\n\n";

// Display initial inventory
displayInventory($inventory);

echo "\nUpdating inventory...\n";
updateInventory($inventory, 'apple', 50);
updateInventory($inventory, 'banana', -30);
updateInventory($inventory, 'watermelon', 20);

echo "\nChecking low stock items...\n";
findLowStock($inventory, 100);

echo "\nApplying discount...\n";
applyDiscount($inventory, 10);

echo "\nFinal Inventory:\n";
displayInventory($inventory);

?>