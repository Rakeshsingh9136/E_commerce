<?php
$host = 'localhost'; // Your database host
$db = 'foodie'; // Your database name
$user = 'root'; // Your database username
$pass = ''; // Your database password

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get POST data
$email = trim($_POST['email']);
$password = trim($_POST['password']);

// Validate input
if (empty($email) || empty($password)) {
    die("Please fill all fields.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email format.");
}

// Prepare and execute the statement
$stmt = $conn->prepare("SELECT name, password FROM user WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

// Check if user exists
if ($stmt->num_rows == 1) {
    $stmt->bind_result($name, $hashedPassword);
    $stmt->fetch();

    // Verify the password
    if ($password== $hashedPassword) { // Use password_verify for hashed passwords
        // Start a session and store user information
        session_start();
        $_SESSION['name'] = $name; // Store the user's name in session
        echo "Login successful!"; // Redirect or show success message
        header("Location: ../frontend/"); // Uncomment to redirect to a welcome page
        exit(); // Ensure no further code is executed after redirection
    } else {
        echo "Invalid password.";
    }
} else {
    echo "No account found with that email.";
}

// Close connection
$stmt->close();
$conn->close();
?>
