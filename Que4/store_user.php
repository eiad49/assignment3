<?php
// Database connection code
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "user_registration2";

$conn = mysqli_connect($servername, $username, $password, $database);

// Check the database connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input from the form
    $name = $_POST['name'];
    $email = $_POST['email'];

    // SQL query to insert user data into the "users" table
    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

    if (mysqli_query($conn, $sql)) {
        // Registration successful
        echo "User information has been successfully saved.";
    } else {
        // Handle database error
        echo "Error: " . mysqli_error($conn);
    }
}

// Close the database connection
?>
