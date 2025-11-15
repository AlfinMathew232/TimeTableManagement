<?php
require('header.php');

if (isset($_POST['submit'])) {
    $class = $_POST['class'];
} else {
    $class = 1;
}
?>

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Exams</h3>

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
                                    <h3 class="page-title">Exam Time Table</h3>
                                </div>

                                <div class="col-sm-3 text-end float-end ms-auto download-grp">
                                    <a href="add-exam.php" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                            <form method="post">
                                <div class="row">
                                    <div class="col-md-4">
                                        <select name="class" class="form-control">
                                            <?php

                                            $sql = "SELECT *  FROM `tbl_class` ";
                                            $rlt = dbset($sql, 1);
                                            while ($row = mysqli_fetch_array($rlt)) {
                                            ?>
                                                <option value="<?php echo $row[0] ?>"><?php echo $row[1] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="table-responsive">
                            <table class="table border-0 star-student table-hover table-center mb-0 table-striped">
                                <thead class="student-thread">
                                    <tr>

                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Subject</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM `tbl_exam` WHERE `cls_id` LIKE '$class' ";
                                    $rlt = dbset($sql, 1);
                                    while ($row = mysqli_fetch_array($rlt)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row[2] ?></td>
                                            <td><?php echo $row[3] ?></td>
                                            <td><?php echo $row[4] ?></td>
                                            <td>
                                                <a href="edit-exam.php?exid=<?php echo $row[0] ?>" class="btn btn-warning text-white">Edit</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
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

<script src="assets/plugins/datatables/datatables.min.js"></script>

<script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from preschool.dreamguystech.com/template/time-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Oct 2023 06:33:18 GMT -->

</html>