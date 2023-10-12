<?php
include './layout/config.php';
// Check if the 'username' session variable is set
if (isset($_SESSION['username'])) {
    // User is logged in, you can proceed to add the product to their cart

    // Check if the request is coming through an AJAX call
    if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
        // Get the product_id from the AJAX request
        if (isset($_POST['product_id'])) {
            $product_id = $_POST['product_id'];
            $user_id = $_SESSION['username'];

            // 1. Connect to the database
            $conn = mysqli_connect($host, $username, $password, $database);

            if (!$conn) {
                echo json_encode(['status' => 'error', 'message' => 'Database connection error']);
                exit;
            }

            // 2. Check if the product exists in the 'products' table
            $query = "SELECT * FROM products WHERE id = $product_id";
            $result = mysqli_query($conn, $query);
            if (!$result || mysqli_num_rows($result) === 0) {
                echo json_encode(['status' => 'error', 'message' => 'Product not found']);
                exit;
            }
            $query = "SELECT * FROM users WHERE id = '".$user_id."'";
            $userResult = mysqli_query($conn, $query);
            if (!$result || mysqli_num_rows($result) === 0) {
                echo json_encode(['status' => 'error', 'message' => 'User not found']);
                exit;
            }

            // 3. If the product exists, insert a new row in the 'cart' table with 'username' and 'product_id'
            $checkQuery = "SELECT * FROM cart WHERE user_id = $user_id AND product_id = $product_id";
            $checkResult = mysqli_query($conn, $checkQuery);

            if (mysqli_num_rows($checkResult) > 0) {
                // Product already exists in the cart, so update the quantity
                $row = mysqli_fetch_assoc($checkResult);
                $existingQuantity = $row['quantity'];
                $newQuantity = $existingQuantity + 1;

                $updateQuery = "UPDATE cart SET quantity = $newQuantity WHERE user_id = $user_id AND product_id = $product_id";
                $updateResult = mysqli_query($conn, $updateQuery);

                if ($updateResult) {
                    // Update successful
                    // Perform any additional actions if needed
                } else {
                    // Update failed, handle the error
                }
            } else {
                // Product does not exist in the cart, so perform the insert
                $insertQuery = "INSERT INTO cart (user_id, product_id, quantity) VALUES ($user_id, $product_id, 1)";
                $insertResult = mysqli_query($conn, $insertQuery);

                if (!$insertResult) {
                    echo json_encode(['status' => 'error', 'message' => 'Failed to add product to cart']);
                    exit;
                }
            }
            $total_cart_quantity = 0;
            $cart_sel = "SELECT sum(quantity) as cart_quantity FROM cart WHERE user_id = $user_id";
            $cartitems = mysqli_query($conn, $cart_sel);
            while($row = mysqli_fetch_assoc($cartitems)){
                $total_cart_quantity = $row['cart_quantity'];
            }
            // Close the database connection
            mysqli_close($conn);

            // Respond to the AJAX request with a success message or status
            echo json_encode(['status' => 'success', 'message' => 'Product added to cart','cart_quantity'=>$total_cart_quantity]);
            exit;
        } else {
            // If 'product_id' is not provided in the AJAX request, respond with an error
            echo json_encode(['status' => 'error', 'message' => 'Product ID not provided']);
            exit;
        }
    } else {
        // If the request is not AJAX, redirect the user to the homepage or a relevant page
        header('Location: index.php');
        exit;
    }
} else {
    // User is not logged in, respond to the AJAX request with an error message or status
    echo json_encode(['status' => 'error', 'message' => 'Please login to continue']);
    exit;
}
?>
