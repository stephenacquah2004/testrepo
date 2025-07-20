<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'librarian') {
    header("Location: ../../index.html");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Librarian Dashboard</title>
</head>
<body>
    <h1>Welcome, Librarian!</h1>
    <a href="../../backend/api/logout.php">Logout</a>
</body>
</html>
