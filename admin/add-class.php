<?php
require('header.php');

$msg = "";
$scs = "";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
   

    $sql2 = "SELECT * FROM `tbl_class` WHERE `name` = '$name'";
    $rtlcls = dbset($sql2, 2);


    if ($rtlcls != 0) {
        $msg = "Class already exists";
    } else {
        // Insert data into the tbl_class table
        $sql = "INSERT INTO `tbl_class`(`name`) VALUES ('$name')";

        if (dbset($sql, 1)) {
            $scs = "Class Added Succesfully";
        } else {
            $msg = "Error while inserting data";
        }
    }
}
else {
    
}
?>
<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Add Class</h3>

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
                                    <h5 class="form-title"><span>Class Details</span></h5>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Class Name <span class="login-danger">*</span></label>
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>

                               
                                <div class="col-12">
                                    <div class="student-submit">
                                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                    </div>
                                </div>
                                <span class="text-danger">
                                    <?php echo $msg ?>
                                </span>
                                <span class="text-success">
                                    <?php echo $scs ?>
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

<script src="assets/plugins/moment/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from preschool.dreamguystech.com/template/add-department.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Oct 2023 06:40:04 GMT -->

</html>