<?php
// Include database connection file
require_once "db_connection.php";

$recordID = $_GET['id'];

if(isset($recordID)) {
    $singleRecordQuery = "SELECT * FROM admission_requests WHERE id=$recordID";
    $result = mysqli_query($connection, $singleRecordQuery);
    $row = mysqli_fetch_array($result);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SET2020 | Admission Requests Details</title>

    <!-- CSS Libraries -->
    <?php require_once("../backend/layout/partials/css.php") ?>
    <!-- /.CSS Libraries -->

</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">

    <!-- Preloader -->
    <?php require_once("../backend/layout/partials/preloader.php") ?>
    <!-- /.Preloader -->

    <!-- Navbar -->
    <?php require_once("../backend/layout/navbar.php") ?>
    <!-- /.navbar -->

    <!-- Sidebar -->
    <?php require_once("../backend/layout/sidebar.php") ?>
    <!-- /.Sidebar -->

    <!-- Content Wrapper. Contains Page Contents -->
    <div class="content-wrapper">

        <!-- Content Header (Page Header) -->
        <div class="content-header">
            <div class="container-fluid">

            </div>
        </div>
        <!-- /.Content Header (Page Header) -->

        <!-- Main content -->
        <section class="content">
            <!-- Container Fluid -->
            <div class="container-fluid">
                <!-- Main row -->
                <div class="row">
                    <section class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3 class="card-title">Admission Requests Details</h3>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <div class="btn-group text-right" role="group">
                                            <a href="participant-list.php" class="btn btn-sm btn-primary">
                                                <span class='fas fa-list'></span>&nbsp;Back to List
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="admission" class="table table-bordered table-striped">
                                    <tbody>
                                        <tr>
                                            <td class="font-weight-bold text-right">Participant Name</td>
                                            <td><?php echo $row["participant_name"].' ('.$row["gender"] .' | '. $row["marital_status"]. ')'; ?></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold text-right">Phone/Mobile</td>
                                            <td><?php echo $row["mobile"]; ?></td>
                                            <td>
                                                <a href="#" class="btn btn-xs btn-secondary">Send Confirmation Mail</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold text-right">Email ID/Address</td>
                                            <td><?php echo $row["email"]; ?></td>
                                            <td>
                                                <a href="#" class="btn btn-xs btn-info">Send Confirmation SMS</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold text-right">Date of Birth</td>
                                            <td>
                                                <?php
                                                $age = date_diff(date_create($row["dob"]), date_create('now'))->y;
                                                echo $row["dob"].' (Age:'.$age.')';
                                                ?>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold text-right">Last Education</td>
                                            <td><?php echo $row["last_education"]; ?></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold text-right">Birth Certificate Number</td>
                                            <td><?php echo $row["birthcert"]; ?></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold text-right">District Name</td>
                                            <td><?php echo $row["district"]; ?></td>
                                            <td></td>
                                        </tr>

                                        <tr>
                                            <td class="font-weight-bold text-right">Trade Name</td>
                                            <td><?php echo $row["trade_name"]; ?></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold text-right">Have Laptop</td>
                                            <td><?php echo $row["has_laptop"]; ?></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold text-right">Application Date</td>
                                            <td><?php echo $row["created_at"]; ?></td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-success">Approve Application</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </section>
                </div>
                <!-- /.Main row) -->
            </div>
            <!-- /.Container-fluid -->
        </section>
        <!-- /.Main content -->
    </div>
    <!-- /.Content Wrapper -->

    <!-- Footer -->
    <?php require_once("../backend/layout/footer.php") ?>
    <!-- /.Footer -->
</div>
<!-- ./wrapper -->

<!-- JS Libraries -->
<?php require_once("../backend/layout/partials/js.php") ?>
<!-- /. JS Libraries -->


<!-- Page specific script -->
<script>

</script>

</body>
</html>
