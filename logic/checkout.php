<?php
include '../layout/config.php';
$conn = mysqli_connect($host, $username, $password, $database);

if (!isset($_SESSION['username'])) {
    // Redirect to the login page or handle unauthorized access
    header('Location: login.php');
    exit();
}

// Get the logged-in user's ID
$user_id = $_SESSION['username'];

// Step 1: Retrieve the cart data for the logged-in user
$cartQuery = "SELECT * FROM cart WHERE user_id = $user_id";
$cartResult = mysqli_query($conn, $cartQuery);

if (mysqli_num_rows($cartResult) > 0) {
    // Step 2: Insert cart data into the order table and remove from cart
    while ($row = mysqli_fetch_assoc($cartResult)) {
        $product_id = $row['product_id'];
        $quantity = $row['quantity'];

        // Insert data into the order table
        $insertOrderQuery = "INSERT INTO orders (user_id, product_id, quantity, order_date) VALUES ($user_id, $product_id, $quantity, NOW())";
        $insertOrderResult = mysqli_query($conn, $insertOrderQuery);

        if (!$insertOrderResult) {
            die('Unable to insert order'. mysqli_error($conn));
        }

        // Step 3: Remove the cart data for the user from the cart table
        $removeCartQuery = "DELETE FROM cart WHERE user_id = $user_id AND product_id = $product_id";
        $removeCartResult = mysqli_query($conn, $removeCartQuery);

        if (!$removeCartResult) {
            // Removal from cart failed, handle the error
            // Optionally, you can rollback any previous actions or display an error message
        }
    }

    // Order completed successfully, redirect to a confirmation page or show a success message
    header('Location: '.$base_url.'order_confirmation.php');
    exit();
} else {
    // No items in the cart for the user, handle accordingly
    // For example, show a message like "Your cart is empty"
    header('Location: cart.php');
    exit();
}
?>
