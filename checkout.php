<?php

include 'config.php';

// Check the connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Get data from the form submission
$productNames = $_POST['productName'];
$quantities = $_POST['quantity'];  // It's an array now
$totalPrice = $_POST['totalPrice'];

session_start();

$username =  $_SESSION['fullname'];
$email = $_SESSION['emailsession'];

// Check if user is signed in
if (empty($email) || empty($username)) {
    // Display alert and redirect to sign-in page
    echo "<script>alert('Please sign in to place an order.'); window.location.href='loginpage.php';</script>";
    exit();
}

// Ensure that productNames and quantities have the same length
if (count($productNames) !== count($quantities)) {
    die("Error: Mismatch in the number of products and quantities.");
}

// Use a prepared statement for the insert query
$stmt = $con->prepare("INSERT INTO orders (product_name, quantity, total_price, email, username) VALUES (?, ?, ?, ?, ?)");

// Bind parameters
$stmt->bind_param("sssss", $productName, $quantity, $totalPrice, $email, $username);

// Insert data into the database for each product
for ($i = 0; $i < count($productNames); $i++) {
    $productName = $productNames[$i];
    $quantity = $quantities[$i];

    if ($stmt->execute() !== TRUE) {
        echo "Error: " . $stmt->error;
        // Handle errors as needed
    }
}

echo "Order placed successfully!";

// Close the prepared statement
$stmt->close();

// Close the database connection
$con->close();
?>
