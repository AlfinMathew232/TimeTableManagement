<?php
session_start();
include 'dbcon.php';
$error = "";
if (isset($_SESSION['suser'])) {
    header("location:index.php");
} else {
}
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $class = $_POST['class'];
    $pass = $_POST['pass'];

    $sql2 = "SELECT *  FROM `tbl_student` WHERE `email` LIKE '$email'";
    $rtlmail = dbset($sql2, 2);
    $ph = strlen($phone);
    if ($rtlmail != 0) {
        $error = "Email already exists";
    } elseif ($ph < 10 || $ph > 11) {
        $error = "Invalid phone number";
    } else {

        $sql = "INSERT INTO `tbl_student`(`name`, `email`, `phone`, `class`, `pass`) 
        VALUES ('$name','$email','$phone','$class','$pass')";
        dbset($sql, 1);
        header('Location:login.php');
    }
} 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Register Now</title>

    <link rel="shortcut icon" href="assets/img/favicon.png">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/feather/feather.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="loginbox">
                    <div class="login-left">
                        <img class="img-fluid" src="assets/img/login.png" alt="Logo">
                    </div>
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1>Sign Up</h1>
                            <p class="account-subtitle">Enter details to create your account
                                <br>
                                <span class="text-danger">
                                    <?php echo $error ?>
                                </span>
                            </p>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label>Name <span class="login-danger">*</span></label>
                                    <input class="form-control" type="text" name="name">
                                    <span class="profile-views"><i class="fas fa-user-circle"></i></span>
                                </div>
                                <div class="form-group">
                                    <label>Email <span class="login-danger">*</span></label>
                                    <input class="form-control" type="email" name="email">
                                    <span class="profile-views"><i class="fas fa-envelope"></i></span>
                                </div>
                                <div class="form-group">
                                    <label>Phone <span class="login-danger">*</span></label>
                                    <input class="form-control" type="text" name="phone">
                                    <span class="profile-views"><i class="fas fa-phone"></i></span>
                                </div>

                                <div class="form-group">
                                    <label>Class <span class="login-danger">*</span></label>
                                    <input class="form-control" type="text" name="class">
                                    <span class="profile-views"><i class="fas fa-building"></i></span>
                                </div>

                                <div class="form-group">
                                    <label>Password<span class="login-danger">*</span></label>
                                    <input class="form-control pass-input" type="password" name="pass">
                                    <span class="profile-views feather-eye toggle-password"></span>
                                </div>

                                <div class=" dont-have">Already Registered? <a href="login.php">Login</a></div>
                                <div class="form-group mb-0">
                                    <button class="btn btn-primary btn-block" type="submit" name="submit">Register</button>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/feather.min.js"></script>

    <script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from preschool.dreamguystech.com/template/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Oct 2023 06:41:01 GMT -->

</html>