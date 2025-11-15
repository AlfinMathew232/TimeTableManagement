<?php require('header.php');

// Add timetable
$error = "";
$success = "";
if (isset($_POST['submit'])) {
    $day = $_POST['day'];
    $class = $_POST['class'];
    $hour1 = $_POST['hour1'];
   
    $hour2 = $_POST['hour2'];
    $hour3 = $_POST['hour3'];
    $hour4 = $_POST['hour4'];
    $hour5 = $_POST['hour5'];

    $sql2 = "SELECT *  FROM tbl_timetable WHERE day_id LIKE '$day' AND cls_id LIKE '$class' ";
    $rtltt1 = dbset($sql2, 2);
    $sql21 = "SELECT *  FROM tbl_timetable WHERE day_id LIKE '$day' AND hour1 LIKE '$hour1' ";
    $rtltt21 = dbset($sql21, 2);
    $sql22 = "SELECT *  FROM tbl_timetable WHERE day_id LIKE '$day' AND hour2 LIKE '$hour2' ";
    $rtltt22 = dbset($sql22, 2);
    $sql23 = "SELECT *  FROM tbl_timetable WHERE day_id LIKE '$day' AND hour3 LIKE '$hour3' ";
    $rtltt23 = dbset($sql23, 2);
    $sql24 = "SELECT *  FROM tbl_timetable WHERE day_id LIKE '$day' AND hour4 LIKE '$hour4' ";
    $rtltt24 = dbset($sql24, 2);
    $sql25 = "SELECT *  FROM tbl_timetable WHERE day_id LIKE '$day' AND hour5 LIKE '$hour5' ";
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


        $sql = "INSERT INTO tbl_timetable(day_id, cls_id, hour1, hour2, hour3, hour4, hour5) VALUES ('$day','$class','$hour1','$hour2','$hour3','$hour4','$hour5')";

        if (dbset($sql, 1)) {
            $success = "Timetable Added Succesfully";
        } else {
            $error = "Error while inserting data into the database.";
        }
    }
}
if (isset($_POST['tt_btn'])) {
    $tt_day = $_POST['ttday'];
}

?>
<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Add Time Table</h3>

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
                                        <label>Day <span class="login-danger">*</span></label>
                                        <select name="day" class="form-control">
                                            <option value="">Select Day</option>
                                            <?php

                                            $sql = "SELECT *  FROM `tbl_day` ";
                                            $rlt = dbset($sql, 1);
                                            while ($row = mysqli_fetch_array($rlt)) {
                                            ?>
                                                <option value="<?php echo $row[0] ?>"><?php echo $row[1] ?></option>
                                            <?php } ?>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group local-forms">
                                        <label>Class <span class="login-danger">*</span></label>
                                        <select name="class" class="form-control">
                                            <option value="">Select Class</option>
                                            <?php

                                            $sql = "SELECT *  FROM `tbl_class` ";
                                            $rlt = dbset($sql, 1);
                                            while ($row = mysqli_fetch_array($rlt)) {
                                            ?>
                                                <option value="<?php echo $row[1] ?>"><?php echo $row[1] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
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

                                <span class="text-danger"><?php echo $error ?></span>

                                <div class="col-12">
                                    <div class="student-submit">
                                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                    </div>
                                </div>
                                <span class="text-success"><?php echo $success ?></span>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col-sm-3">
                                    <h3 class="page-title">Time Table</h3>
                                </div>
                                <form method="post">
                                    <div class="col-sm-4">
                                        <select name="ttday" class="form-control m-1">
                                            <option value="0">Choose Day</option>
                                            <?php

                                            $sql = "SELECT *  FROM `tbl_day` ";
                                            $rlt = dbset($sql, 1);
                                            while ($row = mysqli_fetch_array($rlt)) {
                                            ?>
                                                <option value="<?php echo $row[0] ?>"><?php echo $row[1] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <div class="student-submit">
                                            <button type="submit" class="btn btn-primary" name="tt_btn">Submit</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <?php if (isset($tt_day) && !empty($tt_day)) {

                        ?>
                            <div class="table-responsive">
                                <table class="table border-0 star-student table-hover table-center mb-0 table-striped">
                                    <thead class="student-thread">
                                        <tr>
                                            <th>Class</th>
                                            <?php

                                            $sql = "SELECT *  FROM `tbl_hour` ";
                                            $rhr = dbset($sql, 1);
                                            while ($row = mysqli_fetch_array($rhr)) {
                                            ?>
                                                <th><?php echo $row['name'] ?></th>
                                            <?php } ?>

                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        $sql = "SELECT *  FROM `tbl_class` ";
                                        $rlt = dbset($sql, 1);
                                        while ($row = mysqli_fetch_array($rlt)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $row[1] ?>
                                                </td>

                                                <?php

                                                $sql2 = "SELECT * FROM `tbl_timetable` WHERE `day_id` LIKE '$tt_day' AND `cls_id` LIKE '$row[1]'";
                                                $rtl = dbset($sql2, 1);

                                                // Initialize an array to store the timetable data
                                                $timetableData = [];

                                                // Fetch the timetable data into the array
                                                while ($row = mysqli_fetch_assoc($rtl)) {
                                                    $timetableData[] = $row;
                                                }

                                                // Check if there are no records
                                                if (empty($timetableData)) {
                                                    // Output 5 empty table cells
                                                    for ($i = 0; $i < 5; $i++) {
                                                        echo "<td></td>";
                                                    }
                                                } else {
                                                    // Output the timetable data
                                                    foreach ($timetableData as $row) {
                                                        echo "<td>" . $row['hour1'] . "</td>";
                                                        echo "<td>" . $row['hour2'] . "</td>";
                                                        echo "<td>" . $row['hour3'] . "</td>";
                                                        echo "<td>" . $row['hour4'] . "</td>";
                                                        echo "<td>" . $row['hour5'] . "</td>";

                                                ?>

                                                        <td class="text-end">
                                                            <div class="actions">

                                                                <a href="edit-time-table.html" class="btn btn-sm bg-danger-light">
                                                                    <i class="feather-edit"></i>
                                                                </a>
                                                            </div>
                                                        </td>
                                            <?php }
                                                }
                                            } ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php
                        } else {
                        ?>
                            <div class="text-danger">Choose a date to view the timatable</div>
                        <?php
                        }
                        ?>
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

<!-- Mirrored from preschool.dreamguystech.com/template/add-time-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Oct 2023 06:42:44 GMT -->

</html>