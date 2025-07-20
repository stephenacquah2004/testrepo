<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'accountant') {
    header("Location: ../../index.html");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Accountant Dashboard</title>
</head>
<body>
    <h1>Welcome, Accountant!</h1>
    <a href="../../backend/api/logout.php">Logout</a>
</body>
</html>
