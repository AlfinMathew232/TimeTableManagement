<?php require('header.php');
$msg = "";
if (isset($_POST['submit'])) {
    $class = $_POST['class'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $subject = $_POST['subject'];

    $sql = "SELECT * FROM `tbl_exam` WHERE `cls_id` LIKE '$class' AND `date` LIKE '$date' ";
    $rlt = dbset($sql, 2);
    $sql3 = "SELECT * FROM `tbl_exam` WHERE `cls_id` LIKE '$class' AND `subject` LIKE '$subject' ";
    $rlt3 = dbset($sql3, 2);
    if ($rlt != 0) {
        $msg = "Time Table for class on the date exists";
    } elseif ($rlt3 != 0) {
        $msg = "Subject Already Added";
    } else {
        $sql2 = "INSERT INTO `tbl_exam`(`cls_id`, `date`, `time`, `subject`) VALUES ('$class','$date','$time','$subject')";
        $rlt2 = dbset($sql2, 1);
        $msg = "Added Succesfully";
    }
} else {
}
?>

<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Add Exam</h3>

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
                                    <h5 class="form-title"><span>Exam Information</span></h5>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Class</label>
                                        <select class="form-control" name="class">
                                            <option>Select Class</option>
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
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Date</label>
                                        <input type="date" name="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Time</label>
                                        <input type="time" name="time" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Subject</label>
                                        <select class="form-control" name="subject">
                                            <option>Select Subject</option>
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

                                <div class="col-12">
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                </div>
                                <?php echo $msg ?>

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

<!-- Mirrored from preschool.dreamguystech.com/template/add-exam.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Oct 2023 06:43:56 GMT -->

</html>