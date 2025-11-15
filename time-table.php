<?php
require('header.php');
if (isset($_POST['tt_btn'])) {
    $tt_day = $_POST['ttday'];
}
?>

<div class="page-wrapper">
    <div class="content container-fluid">
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
                                                }
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

<script src="assets/plugins/datatables/datatables.min.js"></script>

<script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from preschool.dreamguystech.com/template/time-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Oct 2023 06:33:18 GMT -->

</html>