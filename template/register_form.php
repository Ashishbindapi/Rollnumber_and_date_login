<?php
include '../thems/header.php';
if (isset($_SESSION['user_data'])) {
    header("Location:http://localhost/student/dashboard.php?id=" . $_SESSION['id']);
}?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Register
                </div>
                <div class="card-body">
                    <form method="post" action="../register.php">
                        <div class="form-group">
                            <label for="studentName">Student Name:</label>
                            <input type="text" class="form-control" id="studentName" name="studentName" required>
                        </div>
                        <div class="form-group">
                            <label for="fatherName">Father's Name:</label>
                            <input type="text" class="form-control" id="fatherName" name="fatherName" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input class="form-control" id="address" name="address" required>
                        </div>
                        <div class="form-group">
                            <label for="dob">Date of Birth:</label>
                            <input type="date" class="form-control" id="dob" name="dob" required>
                        </div>
                        <div class="form-group">
                            <label for="rollNumber">Roll Number:</label>
                            <input type="text" class="form-control" id="rollNumber" name="rollNumber" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../thems/footer.php' ?>