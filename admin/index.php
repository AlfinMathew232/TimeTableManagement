<?php require('header.php');
$dy = "";
if (isset($_POST['tt_btn'])) {
    $tt_day = $_POST['ttday'];
} else {
    $tt_day = 1;
}
?>
<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Welcome Admin!</h3>

                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>Total Students</h6>
                                <?php
                                $sql = "SELECT COUNT(*) as user_count FROM tbl_student";
                                $rlt = dbset($sql, 3);

                                $userCount = $rlt[0];

                                ?>
                                <h3><?php echo $userCount ?></h3>
                            </div>
                            <div class="db-icon">
                                <img src="assets/img/icons/dash-icon-01.svg" alt="Dashboard Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>Total Class</h6>
                                <?php
                                $sql = "SELECT COUNT(*) as user_count FROM tbl_class";
                                $rlt = dbset($sql, 3);

                                $userCount = $rlt[0];

                                ?>
                                <h3><?php echo $userCount ?></h3>
                            </div>
                            <div class="db-icon">
                                <img src="assets/img/icons/dash-icon-03.svg" alt="Dashboard Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>Total Teachers</h6>
                                <?php
                                $sql = "SELECT COUNT(*) as user_count FROM tbl_teacher";
                                $rlt = dbset($sql, 3);

                                $userCount = $rlt[0];

                                ?>
                                <h3><?php echo $userCount ?></h3>
                            </div>
                            <div class="db-icon">
                                <img src="assets/img/icons/dash-icon-04.svg" alt="Dashboard Icon">
                            </div>
                        </div>
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
                                <div class="col">
                                    <h3 class="page-title">Time Table</h3>
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
                                                            <?php
                                                                if ($row[0] == $tt_day) {
                                                                    $dy = $row[1];
                                                                }
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <div class="col">
                                                        <div class="student-submit">
                                                            <button type="submit" class="btn btn-primary" name="tt_btn">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>

                                                <div class="col-sm-3 text-end float-end ms-auto download-grp">
                                                    <a href="add-time-table.php" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <?php if (isset($tt_day) && !empty($tt_day)) {

                                        ?>
                                            <span class="btn btn-primary">
                                                <?php echo $dy ?>
                                            </span>
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

                                                                                <a href="edit-timetable.php?ttid=<?php echo $row['tt_id'] ?>" class="btn btn-sm bg-danger-light">
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
        </div>


    </div>



</div>

</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/plugins/apexchart/apexcharts.min.js"></script>
<script src="assets/plugins/apexchart/chart-data.js"></script>

<script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from preschool.dreamguystech.com/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Oct 2023 06:39:25 GMT -->

</html>