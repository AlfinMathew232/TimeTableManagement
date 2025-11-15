<?php require('header.php');
$ex_id = $_GET['exid'];
$msg = "";
if (isset($_POST['submit'])) {
    $date = $_POST['date'];
    $time = $_POST['time'];

    $sql2 = "UPDATE `tbl_exam` SET `time` = '$time', `date` = '$date' WHERE `ex_id` LIKE '$ex_id' ";
    $rlt2 = dbset($sql2, 1);
    if ($rlt2 != 0) {
        $msg = "Success";
    } else {
        $msg = "Failed to update exam";
    }
} else {
}

?>

<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Edit Exam</h3>

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
                                    <h3 class="page-title">Exam Details</h3>
                                </div>


                            </div>

                        </div>

                        <div class="table-responsive">
                            <table class="table border-0 star-student table-hover table-center mb-0 table-striped">
                                <thead class="student-thread">
                                    <tr>

                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Subject</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM `tbl_exam` WHERE `ex_id` LIKE '$ex_id' ";
                                    $rlt = dbset($sql, 1);
                                    while ($row = mysqli_fetch_array($rlt)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row[2] ?></td>
                                            <td><?php echo $row[3] ?></td>
                                            <td><?php echo $row[4] ?></td>

                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
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
                                <div class="col-sm-3">
                                    <h3 class="page-title">Edit Exam</h3>
                                </div>

                                <?php echo $msg ?>
                            </div>

                        </div>

                        <form method="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Date</label>
                                    <input type="date" name="date" placeholder="date" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label>Time</label>
                                    <input type="time" name="time" placeholder="date" class="form-control">
                                </div>
                                <div class="col-md-12 mt-3">
                                    <label></label>
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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

<script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from preschool.dreamguystech.com/template/edit-exam.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Oct 2023 06:43:56 GMT -->

</html>