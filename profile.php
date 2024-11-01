<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: auth.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <link rel="stylesheet" href="profile-style.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="profile-container">
    <div class="profile-header">
        <h1>Welcome, <?php echo htmlspecialchars($_SESSION['user_name']); ?></h1>
    </div>
    <div class="profile-details">
        <p><strong>Email:</strong> <?php echo htmlspecialchars($_SESSION['user_email']); ?></p>
        <p><a href="logout.php">Logout</a></p>
    </div>
</div>
</body>
</html>
