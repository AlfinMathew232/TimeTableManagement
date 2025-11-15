<?php
require('header.php');

?>
<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Students List</h3>

                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table comman-shadow">
                    <div class="card-body">

                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="page-title">Students</h3>
                                </div>
                                
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table border-0 star-student table-hover table-center mb-0 table-striped">
                                <thead class="student-thread">
                                    <tr>
                                        <th>
                                            <div class="form-check check-tables">
                                                <input class="form-check-input" type="checkbox" value="something">
                                            </div>
                                        </th>

                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Class</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    $sql = "SELECT *  FROM `tbl_student` ";
                                    $rlt = dbset($sql, 1);
                                    while ($row = mysqli_fetch_array($rlt)) {
                                    ?>
                                        <tr>
                                            <td>
                                                <div class="form-check check-tables">
                                                    <input class="form-check-input" type="checkbox" value="something">
                                                </div>
                                            </td>

                                            <td>
                                                <h2 class="table-avatar">

                                                    <a href="student-details.html"><?php echo $row[1] ?></a>
                                                </h2>
                                            </td>
                                            <td><?php echo $row[2] ?></td>
                                            <td><?php echo $row[3] ?></td>
                                            <td>
                                                <?php $sql2 = "SELECT * FROM `tbl_class` WHERE `cls_id` = $row[class]";
                                                $sub = dbset($sql2, 3);
                                                echo $sub[1];
                                                ?>
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

<!-- Mirrored from preschool.dreamguystech.com/template/students.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Oct 2023 06:39:51 GMT -->

</html>