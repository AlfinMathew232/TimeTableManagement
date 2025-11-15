<?php
include('header.php');
$error = "";
$success = "";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $class = $_POST['class'];
    $pass = $_POST['pass'];
    $batch = $_POST['batch'];
    $regno = $_POST['regno'];

    $sql2 = "SELECT * FROM `tbl_student` WHERE `email` = '$email'";
    $rtlmail = dbset($sql2, 2);
    $ph = strlen($phone);

    if ($rtlmail != 0) {
        $error = "Email already exists";
    } elseif ($ph < 10 || $ph > 11) {
        $error = "Invalid phone number";
    } else {
        // Insert data into the tbl_student table
        $sql = "INSERT INTO `tbl_student`(`name`, `email`, `phone`, `class`, `pass`, `batch`, `regno`) 
        VALUES ('$name','$email','$phone','$class','$pass','$batch','$regno')";

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
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Add Students </h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card comman-shadow">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title student-info">Student Information <br>
                                    </h5>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Name <span class="login-danger">*</span></label>
                                        <input class="form-control" name="name" type="text" placeholder="Enter First Name">
                                    </div>
                                </div>



                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>E-Mail <span class="login-danger">*</span></label>
                                        <input class="form-control" name="email" type="email" placeholder="Enter Email Address">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Class <span class="login-danger">*</span></label>
                                        <select name="class" class="bg-light rounded p-4 pt-1 pb-1 form-control">
                                            <?php

                                            $sql = "SELECT *  FROM `tbl_class` ";
                                            $rlt = dbset($sql, 1);
                                            while ($row = mysqli_fetch_array($rlt)) {
                                            ?>
                                                <option value="<?php echo $row[0] ?>"><?php echo $row[1] ?></option>
                                            <?php } ?>
                                          
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Phone </label>
                                        <input class="form-control" type="text" maxlength="10" placeholder="Enter Phone Number" name="phone">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Password </label>
                                        <input class="form-control" type="password" placeholder="Enter Password" name="pass">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Phone </label>
                                        <input class="form-control" type="text" placeholder="Enter Reg No" name="regno">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Password </label>
                                        <input class="form-control" type="text" placeholder="Enter Batch" name="batch">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="student-submit">
                                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                    </div>
                                    <span class="text-danger"><?php echo $error ?></span>
                                    <span class="text-success"><?php echo $success ?></span>

                                </div>
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

<!-- Mirrored from preschool.dreamguystech.com/template/add-student.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Oct 2023 06:40:01 GMT -->

</html>