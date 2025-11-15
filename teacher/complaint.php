<?php require('header.php');
$msg = "";
if (isset($_POST['submit'])) {
    $message = $_POST['message'];

    $sql = "INSERT INTO `tbl_message`(`name`, `message`, `role`) VALUES ('$tid','$message','$role')";
    $rlt = dbset($sql, 1);

    if ($rlt != 0) {
        $msg = "Message send succesfully";
    } else {
        $msg = "Error";
    }
}

?>

<div class="page-wrapper">
    <div class="content container-fluid">


        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Send A Message</h5>
                        <p class="text-primary ml-5"><?php echo $msg ?></p>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">


                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Message</label>
                                <div class="col-md-10">
                                    <textarea rows="5" cols="5" class="form-control" placeholder="Enter message here" name="message"></textarea>
                                    <button class="btn btn-primary mt-3" type="submit" name="submit">Submit</button>
                                </div>
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
                                    <h3 class="page-title">Recent Messages</h3>
                                </div>

                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table border-0 star-student table-hover table-center mb-0 table-striped">
                                <thead class="student-thread">
                                    <tr>
                                        <th>Message</th>
                                        <th>Response</th>
                                        <th class="text-end">Status </th>



                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM `tbl_message` WHERE `name` LIKE '$tid' AND `role` LIKE '$role'";
                                    $rlt = dbset($sql, 1);
                                    while ($row = mysqli_fetch_array($rlt)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row[3] ?>
                                            </td>
                                            <td>
                                                <?php echo $row[4] ?>
                                            </td>
                                            <td class="text-end">
                                                <?php if ($row[5] == 0) {
                                                ?>
                                                <button class="btn btn-warning text-white">Pending</button>
                                                <?php  }else{ ?>
                                                    <button class="btn btn-success">Viewed</button>
                                                    <?php } ?>
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