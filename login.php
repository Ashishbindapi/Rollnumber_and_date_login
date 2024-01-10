<?php
include 'config.php';
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$rollNumber = $_POST['rollNumber'];
$dob = $_POST['dob'];

$sql = "SELECT * FROM students WHERE roll_number = '$rollNumber' AND dob = '$dob'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    session_start();
    $_SESSION['loggedIn'] = true;
    $student = $result->fetch_assoc();
    $_SESSION['user_data'] = $student;
    $_SESSION['id'] = $student['ID'];
    header("Location:http://localhost/student/dashboard.php?id=" . $student['ID']);
} else {
    if (isset($_GET['error'])) {
        echo "Please Enter Correct Date and Password";
    }
    header("Location:http://localhost/student/template/login_form.php?error=1");
}

$conn->close();
