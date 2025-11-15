<?php include('header.php');
$tid = $_GET['tid'];
$msg = "";
$sql = "SELECT * FROM `tbl_teacher` WHERE `t_id` LIKE '$tid' ";
$rlt = dbset($sql, 3);

if (isset($_POST['submit'])) {
    $status = $_POST['status'];

    $sql2 = "UPDATE `tbl_teacher` SET `sts` = '$status' WHERE `t_id` LIKE '$tid' ";
    $rlt2 = dbset($sql2, 1);
    $msg = "Update Success";
}else {
   
}
?>

<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Edit Students</h3>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card comman-shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <h5>Name: <span class="text-primary"><?php echo $rlt[1] ?></span></h5>
                                <h5>Email: <span class="text-primary"><?php echo $rlt[2] ?></span></h5>
                                <h5>Phone: <span class="text-primary"><?php echo $rlt[3] ?></span></h5>
                                <h5>Status: <span class="text-primary"><?php if ($rlt[5] == 0) { ?>Active <?php } else { ?>Inactive <?php } ?></span></h5>
                            </div>
                            <div class="col-md-4">
                                <form method="post" action="">
                                    <h5>Edit Status</h5>
                                    <span class="text-primary">
                                        <?php echo $msg ?>
                                    </span>
                                    <select name="status" class="form-control">
                                        <option value="0">Active</option>
                                        <option value="1">Inactive</option>
                                    </select>
                                    <br>
                                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                                </form>
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

<script src="assets/plugins/select2/js/select2.min.js"></script>

<script src="assets/plugins/moment/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from preschool.dreamguystech.com/template/edit-student.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Oct 2023 06:40:01 GMT -->

</html>