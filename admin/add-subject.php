<?php
require('header.php');
$error = "";
$success = "";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $teacher = $_POST['teacher'];
   

    $sql2 = "SELECT * FROM `tbl_sub` WHERE `sub_name` = '$name' AND `t_id` = $teacher ";
    $rtlsub = dbset($sql2, 2);


    if ($rtlsub != 0) {
        $error = "Subject with same teacher already exists";
   
    } else {
        // Insert data into the tbl_sub table
        $sql = "INSERT INTO `tbl_sub`(`sub_name`, `t_id`) VALUES ('$name','$teacher')";

        if (dbset($sql, 1)) {
            $success = "Subject Added Succesfully";
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
                    <h3 class="page-title">Add Subject</h3>

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
                                    <h5 class="form-title"><span>Subject Information</span></h5>
                                   <p class="text-danger"><?php echo $error ?></p>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Subject Name <span class="login-danger">*</span></label>
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Teacher<span class="login-danger">*</span></label>
                                        <select name="teacher" class="form-control">
                                            <option>Select Teacher</option>
                                            <?php

                                            $sql = "SELECT *  FROM `tbl_teacher` ";
                                            $rlt = dbset($sql, 1);
                                            while ($row = mysqli_fetch_array($rlt)) {
                                            ?>
                                                <option value="<?php echo $row[0] ?>"><?php echo $row[1] ?></option>
                                            <?php } ?>
                                        </select>

                                    </div>
                                </div>
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

<script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from preschool.dreamguystech.com/template/add-subject.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Oct 2023 06:40:04 GMT -->

</html>