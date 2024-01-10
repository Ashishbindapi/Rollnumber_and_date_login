<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $studentName = mysqli_real_escape_string($conn, $_POST['studentName']);
    $fatherName = mysqli_real_escape_string($conn, $_POST['fatherName']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $rollNumber = mysqli_real_escape_string($conn, $_POST['rollNumber']);

    $sql = "INSERT INTO `students` (`student_name`, `father_name`, `address`, `dob`, `roll_number`) 
        VALUES ('$studentName', '$fatherName', '$address', '$dob', '$rollNumber')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
        header("Location:http://localhost/student/template/login_form.php");
    } else {
        echo "Registration not failled!";
    }
}

$conn->close();
?>
