<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'bookshop_personnel') {
    header("Location: ../../index.html");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bookshop Dashboard</title>
</head>
<body>
    <h1>Welcome, Bookshop Personnel!</h1>
    <a href="../../backend/api/logout.php">Logout</a>
</body>
</html>
