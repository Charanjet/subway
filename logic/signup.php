<?php
include __DIR__."/../layout/config.php";

// Create a database connection
$connection = mysqli_connect($host, $username, $password, $database);

// Check the connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Process the signup form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user inputs from the form
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare the SQL statement to insert the user data into the 'users' table
    $sql_insert_user = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";

    // Use a prepared statement to prevent SQL injection
    $stmt = mysqli_prepare($connection, $sql_insert_user);
    mysqli_stmt_bind_param($stmt, "sss", $username, $hashed_password, $email);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        header('location: '.$base_url."/login.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($connection);
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}

// Close the connection
mysqli_close($connection);
?>
