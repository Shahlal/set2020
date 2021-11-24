<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SET2020 | Admission Requests</title>

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
                                <h3 class="card-title">Admission Requests</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <table id="admission" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>Education</th>
                                        <th>District</th>
                                        <th>Trade Name</th>
                                        <th>Apply Date</th>
                                        <th class="text-center">Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php

                                    include_once "db_connection.php";

                                    $admissionRequestListQuery = "SELECT * FROM admission_requests";
                                    $result = mysqli_query($connection, $admissionRequestListQuery);
                                    $rowNumber = mysqli_num_rows($result);

                                    if ($rowNumber > 0) {
                                        while($row = mysqli_fetch_array($result)) {
                                    ?>
                                        <tr id="<?php echo $row['id'] ?>">
                                            <td>
                                                <a href="participant-details.php?id=<?php echo $row["id"]; ?>" style="color: blue">
                                                    <?php echo ($row["participant_name"]) ? (ucwords($row["participant_name"])) : ('N/A'); ?>
                                                </a>
                                            </td>
                                            <td><?php echo ($row["mobile"]) ? $row["mobile"] : 'N/A'; ?></td>
                                            <td><?php echo ($row["email"]) ? $row["email"] : 'N/A'; ?></td>
                                            <td><?php echo ($row["last_education"]) ? $row["last_education"] : 'N/A'; ?></td>
                                            <td><?php echo ($row["district"]) ? $row["district"] : 'N/A'; ?></td>
                                            <td><?php echo ($row["trade_name"]) ? $row["trade_name"] : 'N/A'; ?></td>
                                            <td><?php $date = date_create($row["created_at"]); echo (date_format($date, 'Y-m-d')); ?></td>
                                            <td class="text-center">
                                                <?php
                                                $status = $row["status"];
                                                if ($status == "Approved") {
                                                    echo '<a class="btn btn-sm btn-outline-success">Approved</a>';
                                                } elseif ($status == "Discard") {
                                                    echo '<a class="btn btn-sm btn-outline-danger">Discard</a>';
                                                } else {
                                                    echo '<a class="btn btn-sm btn-outline-primary">New</a>';
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                    <?php
                                        }
                                    } else {
                                        echo '<tr class="text-center"><td colspan="8">No Record Found</td></tr>';
                                    }
                                    ?>


                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>Education</th>
                                        <th>District</th>
                                        <th>Trade Name</th>
                                        <th>Apply Date</th>
                                        <th class="text-center">Status</th>
                                    </tr>
                                    </tfoot>

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
