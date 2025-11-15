<?php
session_start();
include "dbcon.php";
if (isset($_SESSION['steacher'])) {
} else {
    header("location:login.php");
}
$usr = $_SESSION['steacher'];
$name = $_SESSION['tname'];
$role = "teacher";
$msg = "";
$error = "";
?>
<?php

$sql = "SELECT * FROM `tbl_teacher` WHERE `t_id`LIKE '$usr'";
$rltstud = dbset($sql, 3);
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $pass = $_POST['pass'];


    $sql = "UPDATE `tbl_teacher` SET `name`='$name',`phone`='$phone',`email`='$email',`pass`='$pass' WHERE `t_id`= '$usr'";
    $rlt = dbset($sql, 1);
    if ($rlt != 0) {
        $msg = "Succesfully edited";
    } else {
        $error = "Failed to update";
    }
}


?>


<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Profile</title>

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
                            <h1>Account Details</h1>
                            <span class="text-success"><?php echo $msg ?></span>
                            <span class="text-danger"><?php echo $error ?></span>

                            <form action="" method="post">
                                <div class="form-group">
                                    <label>Name <span class="login-danger">*</span></label>
                                    <input class="form-control" type="text" name="name" value="<?php echo $rltstud[1] ?>">
                                    <span class="profile-views"><i class="fas fa-user-circle"></i></span>
                                </div>
                                <div class="form-group">
                                    <label>Email <span class="login-danger">*</span></label>
                                    <input class="form-control" type="email" name="email" value="<?php echo $rltstud[3] ?>">
                                    <span class="profile-views"><i class="fas fa-envelope"></i></span>
                                </div>
                                <div class="form-group">
                                    <label>Phone <span class="login-danger">*</span></label>
                                    <input class="form-control" type="text" name="phone" value="<?php echo $rltstud[2] ?>">
                                    <span class="profile-views"><i class="fas fa-phone"></i></span>
                                </div>
                                <div class="form-group">
                                    <label>Password<span class="login-danger">*</span></label>
                                    <input class="form-control pass-input" type="password" name="pass" value="<?php echo $rltstud[4] ?>">
                                    <span class="profile-views feather-eye toggle-password"></span>
                                </div>
                                <button class="btn btn-primary btn-block" type="submit" name="submit">Reset</button>
                            </form>
                        </div>


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