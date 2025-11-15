<!DOCTYPE html>
<html lang="en">

<?php
session_start();
include 'dbcon.php';
$msg = "";

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $phnumb = $_POST['phnumb'];
    $newpass = $_POST['newpass'];
    $sql = "SELECT *  FROM `tbl_teacher` WHERE `email` LIKE '$email' AND `phone` LIKE '$phnumb' ";
    $rlt = dbset($sql, 3);
    if ($rlt != 0) {
        $sql = "UPDATE `tbl_teacher` SET `pass`='$newpass' WHERE `email` LIKE '$email' AND `phone` LIKE '$phnumb' ";
        dbset($sql, 1);

        $msg = "Success";
    } else {
        $msg = "Invalid email or phonenumber";
    }
}
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Collage - Forgot Password</title>

    <link rel="shortcut icon" href="assets/img/favicon.png">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/feather/feather.css">

    <link rel="stylesheet" href="assets/plugins/icons/flags/flags.css">

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
                        <!-- <img class="img-fluid" src="assets/img/login.png" alt="Logo"> -->
                    </div>
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1>Reset Password</h1>
                            <p class="account-subtitle">Let Us Help You</p>

                            <form action="" method="post">
                                <div class="form-group">
                                    <label>Enter your registered email address <span class="login-danger">*</span></label>
                                    <input class="form-control" type="email" name="email">
                                    <span class="profile-views"><i class="fas fa-envelope"></i></span>
                                </div>
                                <div class="form-group">
                                    <label>Enter your Phone number <span class="login-danger">*</span></label>
                                    <input class="form-control" type="text" name="phnumb">
                                </div>
                                <div class="form-group">
                                    <label>Enter new password <span class="login-danger">*</span></label>
                                    <input class="form-control" type="password" name="newpass">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block" type="submit" name="submit">Reset My Password</button>
                                </div>
                                <a href="login.php">
                                    <div class="form-group mb-0">
                                        <div class="btn btn-primary  btn-block">Login</div>
                                    </div>
                                </a>
                                <?php echo $msg
                                ?>
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

<!-- Mirrored from preschool.dreamguystech.com/template/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Sep 2023 05:56:37 GMT -->

</html>