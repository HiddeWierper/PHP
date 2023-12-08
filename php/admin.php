<?php
session_start();

// Check if the user is not logged in, then redirect to the login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: 006.php");
    exit;
}

// Logout logic
if (isset($_GET["logout"])) {
    // Unset all session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Expire the session cookie
    setcookie(session_name(), '', time() - 3600, '/');

    // Redirect to the login page
    header("location: 006.php");
    exit;
}

// Check if the username is "root"
if ($_SESSION["username"] === "root") {
    // Special actions for "root" user
    // For example, display a special message or perform specific tasks
    $specialMessage = "You are logged in as root. Special actions can be performed.";
} else {
    // Regular actions for other users
    $specialMessage = "You are logged in as a regular user.";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome <?php echo $_SESSION["username"]; ?>!</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION["username"]; ?>!</h1>
    <p>This is the admin page.</p>
    <p><?php echo $specialMessage; ?></p>
    <a href="?logout=1">Logout</a>
</body>
</html>
