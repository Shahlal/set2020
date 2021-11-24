<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SET2020 | Courses</title>

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
                                    <div class="col-sm-6 text-left">
                                        <h3 class="card-title">Courses</h3>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <a href="course-create.php" class="btn btn-sm btn-success">
                                            <i class="fas fa-plus"></i>
                                            &nbsp;Add New Course
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <table id="admission" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Course Name</th>
                                        <th class="text-center">Duration</th>
                                        <th class="text-center">Classes</th>
                                        <th class="text-center">Class Length</th>
                                        <th class="text-center">Lecture Type</th>
                                        <th class="text-center">Course Price</th>
                                        <th class="text-center">Current Batch</th>
                                        <th class="text-center">Last Update</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php

                                    include_once "db_connection.php";

                                    $admissionRequestListQuery = "SELECT * FROM courses";
                                    $result = mysqli_query($connection, $admissionRequestListQuery);
                                    $rowNumber = mysqli_num_rows($result);

                                    if ($rowNumber > 0) {
                                        while($row = mysqli_fetch_array($result)) {
                                            ?>
                                            <tr>

                                                <td>
                                                    <a href="course-details.php?id=<?php echo $row["id"]; ?>" style="color: blue">
                                                        <?php echo (ucwords($row["course_name"])); ?>
                                                    </a>
                                                </td>

                                                <td class="text-center"><?php echo ($row["course_duration"]) ? $row["course_duration"] : 'N/A'; ?></td>
                                                <td class="text-center"><?php echo ($row["number_of_lecture"]) ? $row["number_of_lecture"] : 'N/A'; ?></td>
                                                <td class="text-center"><?php echo ($row["class_length"]) ? $row["class_length"] : 'N/A'; ?></td>
                                                <td class="text-center"><?php echo ($row["lecture_type"]) ? $row["lecture_type"] : 'N/A'; ?></td>
                                                <td class="text-center"><?php echo ($row["course_price"]) ? $row["course_price"] : 'N/A'; ?></td>
                                                <td class="text-center"><?php echo ($row["current_batch_number"]) ? $row["current_batch_number"] : 'N/A'; ?></td>
                                                <td class="text-center"><?php $date = date_create($row["updated_at"]); echo (date_format($date, 'Y-m-d')); ?></td>

                                                <td class="text-center">

                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    } else {
                                        echo '<tr class="text-center"><td colspan="8">No Record Found</td></tr>';
                                    }
                                    ?>


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