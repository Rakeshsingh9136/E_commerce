<?php
// Include database connection
require './db.php'; // Make sure to create this file for database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $newPassword = $_POST['password'];
    $confirmPassword = $_POST['confirmpassword']; // Ensure this matches your form input name

    // Validate email and passwords
    if (empty($email) || empty($newPassword) || empty($confirmPassword)) {
        die("Please fill all fields.");
    }

    if ($newPassword !== $confirmPassword) {
        die("Passwords do not match.");
    }

    // Hash the new password
    $hashedPassword = password_hash($newPassword, PASSWORD_BCRYPT);

    // Update password in the database
    $stmt = $conn->prepare("UPDATE user SET password = ? WHERE email = ?");
    $stmt->bind_param("ss", $hashedPassword, $email);

    if ($stmt->execute()) {
        echo "Password reset successfully!";
        header("Location:../frontend/loginPage.php");
    } else {
        echo "Error resetting password: " . $conn->error;
    }

    $stmt->close();
}
$conn->close();
?>
