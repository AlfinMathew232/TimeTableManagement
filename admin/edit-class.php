<?php
require('header.php');
$cid = $_GET['cid'];
$msg = "";
$sql = "SELECT * FROM `tbl_class` WHERE `cls_id` LIKE '$cid' ";
$rlt = dbset($sql, 3);

if (isset($_POST['submit'])) {
    $name = $_POST['name'];

    $sql2 = "UPDATE `tbl_class` SET `name` = '$name' WHERE `cls_id` LIKE '$cid' ";
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
                    <h3 class="page-title">Edit Class</h3>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form method="post">
                            <div class="row">
                                <div class="col-6">
                                    <h5 class="form-title"><span>Class Details</span></h5>

                                    <h6 class=""><span>Name: <?php echo $rlt[1] ?></span></h6>
                                </div>
                                <div class="col-3">
                                    <input type="text" name="name" placeholder="New Name" class="form-control" required>
                                </div>
                                <div class="col-md-3">
                                    <div class="student-submit">
                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                                <span class="text-center text-success">
                                    <?php echo $msg ?>
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

<!-- Mirrored from preschool.dreamguystech.com/template/edit-department.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Oct 2023 06:40:04 GMT -->

</html>