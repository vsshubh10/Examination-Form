<?php
session_start();

// Capture form data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['formData'] = $_POST;

    // Redirect to success page
    header("Location: success.php");
    exit();
}
?>
