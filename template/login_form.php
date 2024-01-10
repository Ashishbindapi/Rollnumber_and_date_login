<?php
include '../thems/header.php';

if (isset($_SESSION['user_data'])) {
    header("Location:http://localhost/student/dashboard.php?id=" . $_SESSION['id']);
}
?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Login
                </div>
                <div class="card-body">
                    <form method="post" action="../login.php">
                        <div class="form-group">
                            <label for="rollNumber">Roll Number:</label>
                            <input type="text" class="form-control" id="rollNumber" name="rollNumber" required>
                            <?php echo isset($_GET['error']) ? "<p class='text-danger'>Please Enter the correct roll number</p>" : "" ?>
                        </div>
                        <div class="form-group">
                            <label for="dob">Date of Birth:</label>
                            <input type="date" class="form-control" id="dob" name="dob" required>
                            <?php echo isset($_GET['error']) ? "<p class='text-danger'>Please Enter the correct date</p>" : ""; ?>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include '../thems/footer.php' ?>