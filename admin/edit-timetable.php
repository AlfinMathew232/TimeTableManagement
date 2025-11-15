<?php
require('header.php');

$tt_id = $_GET['ttid'];
$error = "";
$success = "";
$sql = "SELECT * FROM `tbl_timetable` WHERE `tt_id` LIKE '$tt_id' ";
$rlt = dbset($sql, 3);

if (isset($_POST['submit'])) {

    $hour1 = $_POST['hour1'];
    $hour2 = $_POST['hour2'];
    $hour3 = $_POST['hour3'];
    $hour4 = $_POST['hour4'];
    $hour5 = $_POST['hour5'];

    $sql21 = "SELECT *  FROM tbl_timetable WHERE day_id LIKE '$tt_id' AND hour1 LIKE '$hour1' ";
    $rtltt21 = dbset($sql21, 2);
    $sql22 = "SELECT *  FROM tbl_timetable WHERE day_id LIKE '$tt_id' AND hour2 LIKE '$hour2' ";
    $rtltt22 = dbset($sql22, 2);
    $sql23 = "SELECT *  FROM tbl_timetable WHERE day_id LIKE '$tt_idy' AND hour3 LIKE '$hour3' ";
    $rtltt23 = dbset($sql23, 2);
    $sql24 = "SELECT *  FROM tbl_timetable WHERE day_id LIKE '$tt_id' AND hour4 LIKE '$hour4' ";
    $rtltt24 = dbset($sql24, 2);
    $sql25 = "SELECT *  FROM tbl_timetable WHERE day_id LIKE '$tt_id' AND hour5 LIKE '$hour5' ";
    $rtltt25 = dbset($sql25, 2);
    $tsql1 = "SELECT * FROM tbl_sub ";

    if ($rtltt1 != 0) {
        $error = "Timetable for class already exists";
    } elseif ($rtltt21 != 0) {
        $error = $hour1 . " is allocated to another class";
    } elseif ($rtltt22 != 0) {
        $error = $hour2 . " is allocated to another class";
    } elseif ($rtltt23 != 0) {
        $error = $hour3 . " is allocated to another class";
    } elseif ($rtltt24 != 0) {
        $error = $hour4 . " is allocated to another class";
    } elseif ($rtltt25 != 0) {
        $error = $hour5 . " is allocated to another class";
   
    } else {


        $sql = "UPDATE `tbl_timetable` SET `hour1`='$hour1',`hour2`='$hour2',`hour3`='$hour3',`hour4`='$hour4',`hour5`='$hour5' WHERE `tt_id` LIKE '$tt_id' ";

        if (dbset($sql, 1)) {
            $success = "Timetable Edited Succesfully";
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
                    <h3 class="page-title">Edit Time Table</h3>

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
                                    <h5 class="form-title"><span>Time Table Details</span></h5>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group local-forms">
                                        Day:
                                        <span class="text-primary">

                                            <?php

                                            $sql2 = "SELECT *  FROM `tbl_day` WHERE `day_id` LIKE '$rlt[1]' ";
                                            $tday = dbset($sql2, 3);

                                            ?>
                                            <span><?php echo $tday[1] ?></span>
                                        </span>


                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group local-forms">
                                        Class: <span class="text-primary"><?php echo $rlt[2] ?></span>

                                    </div>
                                </div>
                                <div class="col-12 col-sm-2">
                                    <div class="form-group local-forms">
                                        Hour 1: <span class="text-primary"><?php echo $rlt[3] ?></span>

                                    </div>
                                </div>
                                <div class="col-12 col-sm-2">
                                    <div class="form-group local-forms">
                                        Hour 2: <span class="text-primary"><?php echo $rlt[4] ?></span>

                                    </div>
                                </div>
                                <div class="col-12 col-sm-2">
                                    <div class="form-group local-forms">
                                        Hour 3: <span class="text-primary"><?php echo $rlt[5] ?></span>

                                    </div>
                                </div>
                                <div class="col-12 col-sm-2">
                                    <div class="form-group local-forms">
                                        Hour 4: <span class="text-primary"><?php echo $rlt[6] ?></span>

                                    </div>
                                </div>
                                <div class="col-12 col-sm-2">
                                    <div class="form-group local-forms">
                                        Hour 5: <span class="text-primary"><?php echo $rlt[7] ?></span>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title"><span>Edit Time Table</span></h5>
                                </div>


                                <div class="col-12 col-sm-2">
                                    <div class="form-group local-forms">
                                        <label>Hour 1 <span class="login-danger">*</span></label>
                                        <select name="hour1" class="form-control">
                                            <option value="">Select Subject</option>
                                            <?php

                                            $sql = "SELECT *  FROM `tbl_sub` ";
                                            $rlt = dbset($sql, 1);
                                            while ($row = mysqli_fetch_array($rlt)) {
                                            ?>
                                                <option value="<?php echo $row[1] ?>">
                                                    <?php echo $row[1] ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-2">
                                    <div class="form-group local-forms">
                                        <label>Hour 2 <span class="login-danger">*</span></label>
                                        <select name="hour2" class="form-control">
                                            <option value="">Select Subject</option>
                                            <?php

                                            $sql = "SELECT *  FROM `tbl_sub` ";
                                            $rlt = dbset($sql, 1);
                                            while ($row = mysqli_fetch_array($rlt)) {
                                            ?>
                                                <option value="<?php echo $row[1] ?>">
                                                    <?php echo $row[1] ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-2">
                                    <div class="form-group local-forms">
                                        <label>Hour 3 <span class="login-danger">*</span></label>
                                        <select name="hour3" class="form-control">
                                            <option value="">Select Subject</option>
                                            <?php

                                            $sql = "SELECT *  FROM `tbl_sub` ";
                                            $rlt = dbset($sql, 1);
                                            while ($row = mysqli_fetch_array($rlt)) {
                                            ?>
                                                <option value="<?php echo $row[1] ?>">
                                                    <?php echo $row[1] ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-2">
                                    <div class="form-group local-forms">
                                        <label>Hour 4 <span class="login-danger">*</span></label>
                                        <select name="hour4" class="form-control">
                                            <option value="">Select Subject</option>
                                            <?php

                                            $sql = "SELECT *  FROM `tbl_sub` ";
                                            $rlt = dbset($sql, 1);
                                            while ($row = mysqli_fetch_array($rlt)) {
                                            ?>
                                                <option value="<?php echo $row[1] ?>">
                                                    <?php echo $row[1] ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-2">
                                    <div class="form-group local-forms">
                                        <label>Hour 5 <span class="login-danger">*</span></label>
                                        <select name="hour5" class="form-control">
                                            <option value="">Select Subject</option>
                                            <?php

                                            $sql = "SELECT *  FROM `tbl_sub` ";
                                            $rlt = dbset($sql, 1);
                                            while ($row = mysqli_fetch_array($rlt)) {
                                            ?>
                                                <option value="<?php echo $row[1] ?>">
                                                    <?php echo $row[1] ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>



                            </div>

                            <span class="text-danger"><?php echo $error ?></span>

                            <div class="col-12">
                                <div class="student-submit">
                                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                </div>
                            </div>
                            <span class="text-success"><?php echo $success ?></span>

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

<!-- Mirrored from preschool.dreamguystech.com/template/edit-time-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Oct 2023 06:42:44 GMT -->

</html>