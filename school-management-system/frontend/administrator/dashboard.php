<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'administrator') {
    header("Location: ../../index.html");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Administrator Dashboard</title>
</head>
<body>
    <h1>Welcome, Administrator!</h1>
    <a href="../../backend/api/logout.php">Logout</a>
</body>
</html>
