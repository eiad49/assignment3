<?php
session_start();
// Database connection code
$servername = "localhost";
$username = "root";
$password = ""; 
$database = "user_registration"; 

$conn = mysqli_connect($servername, $username, $password, $database);

// Check the database connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT id, username, password FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            // Login successful
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            header("Location: dashboard.php");
        } else {
            // Invalid password, display an error message
            echo "Invalid password.";
        }
    } else {
        // User not found, display an error message
        echo "User not found.";
    }
}

// Close the database connection
?>
