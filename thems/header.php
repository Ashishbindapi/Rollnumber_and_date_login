<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                 <?php if(isset($_SESSION['user_data'])){
                 echo  '<li class="nav-item">
                        <a href="http://localhost/student/logout.php" class="btn btn-primary">Logout</a>
                    </li>';
                 }else{?>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/student/template/login_form.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/student/template/register_form.php">Register</a>
                </li>
                <?php }?>
            </ul>
        </div>
    </nav>