<?php
require('header.php');
$error = "";
$success = "";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql2 = "SELECT * FROM `tbl_teacher` WHERE `email` = '$email'";
    $rtlmail = dbset($sql2, 2);
    $ph = strlen($phone);

    if ($rtlmail != 0) {
        $error = "Email already exists";
    } elseif ($ph < 10 || $ph > 11) {
        $error = "Invalid phone number";
    } else {
        // Insert data into the tbl_student table
        $sql = "INSERT INTO `tbl_teacher`(`name`, `phone`, `email`, `pass`) VALUES ('$name','$phone','$email','$password')";

        if (dbset($sql, 1)) {
            $success = "User Added Succesfully";
        } else {
            $error = "Error while inserting data into the database.";
        }
    }
}

?>


<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Add Teachers</h3>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form method="post">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title"><span>Teacher Details</span></h5>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Name <span class="login-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Enter Name" name="name">
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Phone <span class="login-danger">*</span></label>
                                        <input type="text" class="form-control" maxlength="10" placeholder="Enter Phone" name="phone">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Email <span class="login-danger">*</span></label>
                                        <input type="email" class="form-control" placeholder="Enter Email" name="email">
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Password <span class="login-danger">*</span></label>
                                        <input type="password" class="form-control" placeholder="Enter password" name="password" required>
                                    </div>
                                </div>
                                <span class="text-danger">
                                    <?php echo $error ?>
                                </span>

                                <div class="col-12">
                                    <div class="student-submit">
                                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                    </div>
                                </div>
                                <span class="text-success">
                                    <?php echo $success ?>
                                </span>
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

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/plugins/select2/js/select2.min.js"></script>

<script src="assets/plugins/moment/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from preschool.dreamguystech.com/template/add-teacher.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Oct 2023 06:40:04 GMT -->

</html>