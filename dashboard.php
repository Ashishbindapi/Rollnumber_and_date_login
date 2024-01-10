<?php
include './thems/header.php';
include 'config.php';

if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true) {
    header("Location:http://localhost/student/template/login_form.php");
    exit;
}

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$studentID = $_GET['id'];
$sql = "SELECT * FROM students WHERE ID = '$studentID'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $student = $result->fetch_assoc();
?>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <h1 class="card-title">Welcome, <?php echo $student['student_name']; ?>!</h1>
                    </div>
                </div>
                <h2 class="card-subtitle mb-2 text-muted">Father Name: <?php echo $student['father_name']; ?></h2>
                <p class="card-text">Roll Number: <?php echo $student['roll_number']; ?></p>
                <p class="card-text">Date of Birth: <?php echo $student['dob']; ?></p>
                <p class="card-text">Address : <?php echo $student['address']; ?></p>
            </div>
        </div>
    </div>
<?php
} else {
?>
    <div class="container mt-5">
        <p class="text-danger">Student not found!</p>
    </div>
<?php
}

$conn->close();
include './thems/footer.php'
?>