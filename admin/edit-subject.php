<?php require('header.php');

$sub = $_GET['sub'];
$msg = "";
$sql = "SELECT * FROM `tbl_sub` WHERE `sub_id` LIKE '$sub' ";
$rlt = dbset($sql, 3);

$sql3 = "SELECT * FROM `tbl_teacher` WHERE `t_id` LIKE '$rlt[2]' ";
$thr = dbset($sql3, 3);

if (isset($_POST['submit'])) {
    $teacher = $_POST['teacher'];

    $sql2 = "UPDATE `tbl_sub` SET `t_id` = '$teacher' WHERE `sub_id` LIKE '$sub' ";
    $rlt2 = dbset($sql2, 1);
    $msg = "Update Success";
} else {
}
?>
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Edit Subject</h3>

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
                                    <h5 class="form-title">
                                        <span>Subject Information</span>
                                        <span class="text-primary">
                                            <?php echo $msg ?>
                                        </span>
                                    </h5>
                                </div>
                                <br> <br>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">

                                        Subject Name:
                                        <span class="text-primary">
                                            <?php echo $rlt[1] ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">

                                        Teacher Name:
                                        <span class="text-primary">
                                            <?php
                                            echo $thr[1];
                                            ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Change Teacher
                                            <span class="login-danger">*</span></label>
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
                                        <button type="submit" name="submit" class="btn btn-primary">
                                            Submit
                                        </button>
                                    </div>
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

<script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from preschool.dreamguystech.com/template/edit-subject.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Oct 2023 06:40:04 GMT -->

</html>