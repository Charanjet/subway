<?php
// Start or resume the session
session_start();

// Clear all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect to the login page or any other relevant page
header('Location: login.php');
exit;
?>
