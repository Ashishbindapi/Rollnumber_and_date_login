<?php include './thems/header.php';
if (isset($_SESSION['user_data'])) {
    header("Location:http://localhost/student/dashboard.php?id=" . $_SESSION['id']);
}

include './thems/footer.php';?>