<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: auth.html");
    exit();
}

$user_id = $_SESSION['user_id'];
$conn = new mysqli("localhost", "root", "", "online_store");

// Fetch cart items for the logged-in user
$sql = "SELECT * FROM cart WHERE user_id = $user_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Display cart items
    while ($row = $result->fetch_assoc()) {
        echo "Product ID: " . $row["product_id"] . " - Quantity: " . $row["quantity"] . "<br>";
    }
} else {
    echo "Ваша корзина пуста.";
}

$conn->close();
?>
