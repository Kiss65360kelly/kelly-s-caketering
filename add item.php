<?php
// Database connection setup
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "caketering"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $itemName = $_POST['item-name'];
    $itemDescription = $_POST['item-description'];
    $itemPrice = $_POST['item-price'];

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO menu_items (name, description, price) VALUES (?, ?, ?)");
    $stmt->bind_param("ssd", $itemName, $itemDescription, $itemPrice);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New menu item added successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
}
$servername = "localhost";
$username = "root";
$password = ""; // Default XAMPP MySQL password is empty
$dbname = "my_website"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>