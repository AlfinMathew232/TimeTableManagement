<?php
session_start();
include "dbcon.php";
if (isset($_SESSION['suser'])) {
} else {
    header("location:login.php");
}
$usr = $_SESSION['suser'];
$name = $_SESSION['uname'];
$class = $_SESSION['class'];
$role = "user";
$msg = "";
$error = "";
?>
<?php
$error = "";
$sql = "SELECT * FROM `tbl_student` WHERE `stud_id`LIKE '$usr'";
$rltstud = dbset($sql, 3);
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $class = $_POST['class'];
    $pass = $_POST['pass'];
    $batch = $_POST['batch'];
    $regno = $_POST['regno'];

    $sql = "UPDATE `tbl_student` SET `name`='$name',`email`='$email', `phone`='$phone',`class`='$class',`pass`='$pass',`batch`='$batch',`regno`='$regno' WHERE `stud_id`= '$usr'";
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
                            <div>
                                <span class="text-success"><?php echo $msg ?></span>
                                <span class="text-danger"><?php echo $error ?></span>
                            </div>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label>Name <span class="login-danger">*</span></label>
                                    <input class="form-control" type="text" name="name" value="<?php echo $rltstud[1] ?>">
                                    <span class="profile-views"><i class="fas fa-user-circle"></i></span>
                                </div>
                                <div class="form-group">
                                    <label>Email <span class="login-danger">*</span></label>
                                    <input class="form-control" type="email" name="email" value="<?php echo $rltstud[2] ?>">
                                    <span class="profile-views"><i class="fas fa-envelope"></i></span>
                                </div>
                                <div class="form-group">
                                    <label>Phone <span class="login-danger">*</span></label>
                                    <input class="form-control" type="text" name="phone" value="<?php echo $rltstud[3] ?>">
                                    <span class="profile-views"><i class="fas fa-phone"></i></span>
                                </div>

                                <div class="form-group local-forms">
                                    <label>Class <span class="login-danger">*</span></label>
                                    <select name="class" class="form-control">
                                        <option value="">Select Class</option>
                                        <?php

                                        $sql = "SELECT *  FROM `tbl_class` ";
                                        $rlt = dbset($sql, 1);
                                        while ($row = mysqli_fetch_array($rlt)) {
                                        ?>
                                            <option value="<?php echo $row[0] ?>"><?php echo $row[1] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Batch <span class="login-danger">*</span></label>
                                    <input class="form-control" type="text" name="batch" value="<?php echo $rltstud[6] ?>">
                                    <span class="profile-views"></span>
                                </div>
                                <div class="form-group">
                                    <label>Register NO<span class="login-danger">*</span></label>
                                    <input class="form-control" type="text" name="regno" value="<?php echo $rltstud[7] ?>">
                                    <span class="profile-views"></i></span>
                                </div>

                                <div class="form-group">
                                    <label>Password<span class="login-danger">*</span></label>
                                    <input class="form-control pass-input" type="password" name="pass" value="<?php echo $rltstud[5] ?>">
                                    <span class="profile-views feather-eye toggle-password"></span>
                                </div>
                                <button class="btn btn-primary btn-block" type="submit" name="submit">Reset</button> </br>
                                <div class="col-auto profile-btn">
                                    <a href="index.php" class="form-control">
                                        Home
                                    </a>
                                </div>
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

</html>