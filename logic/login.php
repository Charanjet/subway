<?php
include __DIR__."/../layout/config.php";
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $u_username = $_POST["username"];
    $u_password = $_POST["password"];

    // Validate the form data (you can add more validation if required)
    if (empty($u_username) || empty($u_password)) {
        echo "Please enter both username and password.";
    } else {
        // Replace 'your_db_hostname', 'your_db_username', 'your_db_password', and 'cisproject' with your actual database details
        $conn = mysqli_connect($host, $username, $password, $database);

        // Check the connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Sanitize the input data to prevent SQL injection
        $u_username = mysqli_real_escape_string($conn, $u_username);
        $u_password = mysqli_real_escape_string($conn, $u_password);

        $query = "SELECT * FROM users WHERE username = '$u_username'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            // Verify the hashed password
            if (password_verify($u_password, $row['password'])) {
                // Password is correct, login successful
                // You can redirect the user to a dashboard or home page here
                $_SESSION["username"] = $row['id'];
                header('location: '.$base_url);
            } else {
                // Invalid password
                echo "Invalid password.";
            }
        } else {
            // User does not exist
            echo "Invalid username or password.";
        }

        // Close the database connection
        mysqli_close($conn);
    }
}
?>
