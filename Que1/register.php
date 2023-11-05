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
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Check if email is already registered
    $sql = "SELECT id FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 0) {
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        if (mysqli_query($conn, $sql)) {
            // Registration successful
            header("Location: login.html");
        } else {
            // Handle database error
        }
    } else {
        // Email already exists, display an error message
        echo "Email is already registered.";
    }
}

// Close the database connection
