<?php
include '../layout/config.php';

// Create a database connection
$connection = mysqli_connect($host, $username, $password);

// Check the connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql_create_database = "CREATE DATABASE IF NOT EXISTS cisproject";
// Execute the query
if (mysqli_query($connection, $sql_create_database)) {
    echo "Database 'cisproject' created successfully or already exists!";
} else {
    die( "Error creating database: " . mysqli_error($connection));
}
mysqli_select_db($connection, 'cisproject');

// SQL query to create 'users' table
$sql_users = "CREATE TABLE IF NOT EXISTS users (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL,
        password VARCHAR(255) NOT NULL,
        email VARCHAR(100) NOT NULL,
        registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

// SQL query to create 'products' table
$sql_products = "CREATE TABLE IF NOT EXISTS products (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(100) NOT NULL,
        price DECIMAL(10, 2) NOT NULL,
        description TEXT,
        stock INT(11) NOT NULL DEFAULT 0,
        image VARCHAR(255)
    )";

// SQL query to create 'orders' table
$sql_orders = "CREATE TABLE IF NOT EXISTS orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    product_id INT NOT NULL,
    quantity INT NOT NULL,
    order_date DATETIME NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
)";

// SQL query to create 'cart' table
$sql_cart = "CREATE TABLE IF NOT EXISTS cart (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        user_id INT(11) NOT NULL,
        product_id INT(11) NOT NULL,
        quantity INT(11) NOT NULL,
        FOREIGN KEY (user_id) REFERENCES users(id),
        FOREIGN KEY (product_id) REFERENCES products(id)
    )";

// Execute the queries
if (mysqli_query($connection, $sql_users) &&
    mysqli_query($connection, $sql_products) &&
    mysqli_query($connection, $sql_orders) &&
    mysqli_query($connection, $sql_cart)) {
    echo "Tables created successfully!";
} else {
    echo "Error creating tables: " . mysqli_error($connection);
}


if(isset($_GET['data_filler']) && $_GET['data_filler']==1){
   $prodcts =  "INSERT INTO products (title, image, price, stock) VALUES 
('Signature Rice Bowls', 'SIGNATURERICEBOWLS_Cat_T1x1_Desktop.jpg', 350, 120),
('Signature Grilled Rice Wraps', 'SIGNATUREGRILLEDRICEWRAPS_Cat_T1x1_Desktop.jpg', 280, 90),
('Under $5 Menu', 'ValueMenu_Cat_T1x1_Desktop.jpg', 70, 50),
('Salads', 'L_SaladCategory_Black_desk_534x534_v2.png', 200, 70),
('Breakfast', 'L_Beauty_SidekickEggBaconBreakfast_Black_Desktop_534x534.jpg', 90, 40),
('Sides', '790_Sides_Cat1x1_Desktop.jpg', 60, 30),
('Drinks', 'DrinksDigital_Cat_T1x1_Desktop.jpg', 120, 60);";
    $ins_prodcts = mysqli_query($connection,$prodcts);
    if($ins_prodcts){
        echo "Products inserted successfully";
    }else{
        die("Some error occurred while inserting products!". mysqli_errno($connection));
    }
}
// Close the connection
mysqli_close($connection);

