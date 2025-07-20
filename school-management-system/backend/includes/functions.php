<?php
function redirect_to_dashboard($role) {
    switch ($role) {
        case 'administrator':
            header("Location: ../../frontend/administrator/dashboard.php");
            break;
        case 'teacher':
            header("Location: ../../frontend/teacher/dashboard.php");
            break;
        case 'accountant':
            header("Location: ../../frontend/accountant/dashboard.php");
            break;
        case 'librarian':
            header("Location: ../../frontend/librarian/dashboard.php");
            break;
        case 'student':
            header("Location: ../../frontend/student/dashboard.php");
            break;
        case 'bookshop_personnel':
            header("Location: ../../frontend/bookshop/dashboard.php");
            break;
        default:
            header("Location: ../../frontend/index.html");
            break;
    }
    exit();
}
?>
