<?php
session_start();

// Retrieve form data from session
if (!isset($_SESSION['formData'])) {
    header("Location: index.html"); // Redirect back to form if no data
    exit();
}

$formData = $_SESSION['formData'];

// Optionally clear session data after use
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <div class="form-header">
            <h1>Registration Successful</h1>
            <p>Here are the details you provided:</p>
        </div>
        <div class="form-details">
            <p><strong>Full Name:</strong> <?php echo htmlspecialchars($formData['name']); ?></p>
            <p><strong>Email Address:</strong> <?php echo htmlspecialchars($formData['email']); ?></p>
            <p><strong>Phone Number:</strong> <?php echo htmlspecialchars($formData['phone']); ?></p>
            <p><strong>Date of Birth:</strong> <?php echo htmlspecialchars($formData['dob']); ?></p>
            <p><strong>Address:</strong> <?php echo nl2br(htmlspecialchars($formData['address'])); ?></p>
        </div>
        <button onclick="window.location.href='index.html'">Register Again</button>
    </div>
</body>
</html>
