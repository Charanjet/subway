<?php include './layout/header.php' ?>

<div class="container mt-5">
<?php
// Fetch the logged-in user ID from the session
$loggedInUserId = $_SESSION['username'];

// Query to fetch cart products for the logged-in user
$query = "SELECT products.id, products.title, SUM(products.price) AS total_price, SUM(cart.quantity) as qty FROM cart JOIN products ON cart.product_id = products.id WHERE cart.user_id = $loggedInUserId group BY products.id";
$result = mysqli_query($conn, $query);

// Calculate the total price
$totalPrice = 0;
$totalQty = 0;
while ($row = mysqli_fetch_assoc($result)) {

    $totalPrice += $row['total_price'];
    $totalQty += $row['qty'];;
}
?>

    <!-- Add your HTML and Bootstrap code here to display the cart products and the total price -->
    <div class="container mt-4">
        <h2>Checkout</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Qty</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                // Fetch and display the cart products
                mysqli_data_seek($result, 0);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td>' . $row['title'] . '</td>';
                    echo '<td>$' . $row['total_price'] . '</td>';
                    echo '<td>' . $row['qty'] . '</td>';
                    echo '</tr>';
                }
                ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Total</th>
                        <th>$<?= $totalPrice ?></th>
                        <th><?= $totalQty ?></th>
                    </tr>
                </tfoot>
            </table>
        </div>

        <h3 class="mt-4">Complete Order</h3>
        <form action="<?= $base_url?>logic/checkout.php" method="post">
            <!-- Add your HTML and Bootstrap code here to display the cart products and the total price -->
            <div class="container mt-4">
                <!-- Customer information form -->
                <h3 class="mt-4">Customer Information</h3>
                <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" name="name" id="name" required>
                    </div>

                    <div class="form-group">
                        <label for="address">Delivery Address:</label>
                        <input type="text" class="form-control" name="address" id="address" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>

                    <!-- Add more form fields for other customer information if needed -->

            </div>
            <button type="submit" class="btn btn-primary">Place Order</button>
        </form>
    </div>
</div>
