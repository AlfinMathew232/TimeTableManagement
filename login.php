<?php
session_start();
include 'dbcon.php';
$msg = "";
if (isset($_SESSION['suser'])) {
    header("location:index.php");
} else {
}
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $type = $_POST['type'];
    if ($type == "0") {
        $sql = "SELECT *  FROM `tbl_student` WHERE `email` LIKE '$email' AND `pass` LIKE '$pass' AND `sts` = 0";
        $rlt = dbset($sql, 2);
        if ($rlt != 0) {
            $usr = dbset($sql, 3);
            $_SESSION['suser'] = $usr[0];
            $_SESSION['uname'] = $usr[1];
            $_SESSION['class'] = $usr[4];
            header("location:index.php");
        } else {
            $msg = "Invalid email or password";
        }
    } elseif ($type == "1") {
        $sql = "SELECT *  FROM `tbl_teacher` WHERE `email` LIKE '$email' AND `pass` LIKE '$pass' AND `sts` = 0";
        $rlt = dbset($sql, 2);
        if ($rlt != 0) {
            $usr = dbset($sql, 3);
            $_SESSION['steacher'] = $usr[0];
            $_SESSION['tname'] = $usr[1];
            header("location:./teacher/index.php");
        } else {
            $msg = "Invalid email or password";
        }
    } elseif ($type == "2") {
        $sql = "SELECT *  FROM `tbl_admin` WHERE `email` LIKE '$email' AND `pass` LIKE '$pass' ";
        $rlt = dbset($sql, 2);
        if ($rlt != 0) {
            $usr = dbset($sql, 3);
            $_SESSION['sadmin'] = $usr[0];
            $_SESSION['uname'] = $usr[1];
            header("location:./admin/index.php");
            $msg = "Invalid ";
        } else {
            $msg = "Invalid email or password";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Login</title>

    <link rel="shortcut icon" href="assets/img/logo1.png">

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
                        <img class="img-fluid" src="assets/img/login.png" alt="Logo">
                    </div>
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1>Welcome</h1>
                            <p class="account-subtitle">Need an account? <a href="register.php">Sign Up</a></p>
                            <span class="text-danger"><?php echo $msg ?></span>
                            <h2>Sign in</h2>

                            <form action="" method="post">
                                <div class="form-group">
                                    <label>Email <span class="login-danger">*</span></label>
                                    <input class="form-control" type="email" name="email">
                                    <span class="profile-views"><i class="fas fa-user-circle"></i></span>
                                </div>
                                <div class="form-group">
                                    <label>Password <span class="login-danger">*</span></label>
                                    <input class="form-control pass-input" type="password" name="pass">
                                    <span class="profile-views feather-eye toggle-password"></span>
                                </div>
                                <div class="form-group ">
                                    <select name="type" class="form-control">
                                        <option value="0">Student</option>
                                        <option value="1">Teacher</option>
                                        <option value="2">Admin</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-primary btn-block" type="submit" name="login">Login</button>
                                </div>
                            </form>
                            <!-- <a href="forgotpassword.php">Forgot Password?</a> -->
                            <!-- Button trigger modal -->
                            <div class="text-center">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Forgot Password
                                </button>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Choose one</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <div class="btn btn-secondary ">
                                                <a href="forgotpassword.php" class="text-white">Student</a>
                                            </div>
                                            
                                            <div class="btn btn-secondary">
                                                <a href="./teacher/forgotpassword.php" class="text-white">Teacher</a>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </div>
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

<!-- Mirrored from preschool.dreamguystech.com/template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Oct 2023 06:39:28 GMT -->

</html>