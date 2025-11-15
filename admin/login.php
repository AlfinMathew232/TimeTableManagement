<?php
session_start();
include '../dbcon.php';
$msg = "";
if (isset($_SESSION['sadmin'])) {
    header("location:index.php");
} else {
}
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $sql = "SELECT *  FROM `tbl_admin` WHERE `email` LIKE '$email' AND `pass` LIKE '$pass' ";
    $rlt = dbset($sql, 2);
    if ($rlt != 0) {
        $usr = dbset($sql, 3);
        $_SESSION['sadmin'] = $usr[0];
        $_SESSION['uname'] = $usr[1];
        header("location:index.php");
    } else {
        $msg = "Invalid email or password";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
  <title>Login</title>

  <link rel="shortcut icon" href="assets/img/favicon.png" />

  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&amp;display=swap"
    rel="stylesheet" />

  <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" />

  <link rel="stylesheet" href="assets/plugins/feather/feather.css" />

  <link rel="stylesheet" href="assets/plugins/icons/flags/flags.css" />

  <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css" />
  <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css" />

  <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
  <div class="main-wrapper login-body">
    <div class="login-wrapper">
      <div class="container">
        <div class="loginbox">
          <div class="login-left">
            <img class="img-fluid" src="assets/img/login.png" alt="Logo" />
          </div>
          <div class="login-right">
            <div class="login-right-wrap">
             
              <h2>Sign in</h2>

              <form action="" method="post">
                <div class="form-group">
                  <label>Username <span class="login-danger">*</span></label>
                  <input class="form-control" type="email" name="email"/>
                  <span class="profile-views"><i class="fas fa-user-circle"></i></span>
                </div>
                <div class="form-group">
                  <label>Password <span class="login-danger">*</span></label>
                  <input class="form-control pass-input" type="password" name="pass"/>
                  <span class="profile-views feather-eye toggle-password"></span>
                </div>
                
                <div class="form-group">
                  <button class="btn btn-primary btn-block" type="submit" name="submit">
                    Login
                  </button>
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

<!-- Mirrored from preschool.dreamguystech.com/template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Oct 2023 06:39:28 GMT -->

</html>