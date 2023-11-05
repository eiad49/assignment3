<?php
session_start(); // Start or resume the session

// Check if the user is authenticated (e.g., logged in)
if (isset($_SESSION['user_id']) && isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    // Redirect to the login page or display an error message if the user is not authenticated
    header("Location: login.html");
    exit(); // Terminate the script
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome, <?php echo $username; ?></h2>
    <a href="logout.php">Logout</a>
</body>
</html>