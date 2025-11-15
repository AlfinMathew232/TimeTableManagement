<?php require('header.php');
$msg = "";
if (isset($_POST['submit'])) {
    $mid = $_POST['message_id'];
    $status = $_POST['sts'];

    $sql = "UPDATE `tbl_message` SET `sts`='$status'  WHERE `msg_id` LIKE '$mid'";
    $rlt = dbset($sql, 1);

    if ($rlt != 0) {
        $msg = "Success";
    } else {
        $msg = "Error";
    }
}
if (isset($_POST['save'])) {
    $mid = $_POST['message_id'];
    $response = $_POST['response'];

    $sql = "UPDATE `tbl_message` SET `response`='$response' WHERE `msg_id` LIKE '$mid'";
    $rlt = dbset($sql, 1);

    if ($rlt != 0) {
        $msg = "Success";
    } else {
        $msg = "Error";
    }
}
?>

<div class="page-wrapper">
    <div class="content container-fluid">




        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col-sm-3">
                                    <h3 class="page-title">Recent Messages</h3>
                                </div>
                                <span class=" text-success fs-3">

                                    <?php echo $msg ?>
                                </span>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table border-0 star-student table-hover table-center mb-0 table-striped">
                                <thead class="student-thread">
                                    <tr>
                                        <th>Sent By</th>
                                        <th>Message</th>
                                        <th>Response</th>
                                        <th>Status </th>
                                        <th>Edit</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM `tbl_message`";
                                    $rlt = dbset($sql, 1);
                                    while ($row = mysqli_fetch_array($rlt)) {
                                    ?>
                                        <tr>
                                            <td>
                                                <?php 
                                                if ($row[2]=="user"){
                                                    $sql="SELECT * FROM `tbl_student` WHERE `stud_id` LIKE '$row[1]'";
                                                    $rlst=dbset($sql,3);
                                                    echo $rlst[1];
                                                }elseif($row[2]=="teacher"){
                                                    $sql="SELECT * FROM `tbl_teacher` WHERE `t_id` LIKE '$row[1]'";
                                                    $rlst=dbset($sql,3);
                                                    echo $rlst[1];
                                                }
                                            
                                            ?>
                                            </td>
                                            <td><?php echo $row[3] ?>
                                            </td>
                                            <td>
                                                <form method="post">
                                                    <input type="hidden" name="message_id" value="<?php echo $row[0]; ?>">
                                                    <input type="text" name="response" class="form-control" placeholder="Response" value="<?php echo $row[4] ?>">
                                                    <button type="submit" class="btn btn-primary mt-2" name="save">Save</button>
                                                </form>
                                            </td>
                                            <td>
                                                <?php if ($row[5] == 0) {
                                                ?>
                                                    <button class="btn btn-warning text-white">Pending</button>
                                                <?php  } else { ?>
                                                    <button class="btn btn-success">Viewed</button>
                                                <?php } ?>
                                            </td>
                                            <td>
                                                <form method="post">
                                                    <select name="sts" class="form-control">
                                                        <option>Status</option>
                                                        <option value="0">Pending</option>
                                                        <option value="1">Viewed</option>
                                                    </select>
                                                    <input type="hidden" name="message_id" value="<?php echo $row[0]; ?>">
                                                    <button type="submit" name="submit" class="btn btn-primary form-control">Change</button>
                                                </form>
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

<script src="assets/plugins/select2/js/select2.min.js"></script>

<script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from preschool.dreamguystech.com/template/form-basic-inputs.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Oct 2023 06:42:41 GMT -->

</html>