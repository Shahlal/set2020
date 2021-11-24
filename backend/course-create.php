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
                                        <h3 class="card-title">New Course Add/Create</h3>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <a href="course-list.php" class="btn btn-sm btn-primary">
                                            <i class="fas fa-backward"></i>
                                            &nbsp;Back to List
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="course-store.php" method="POST">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="course_name">Course Name:</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-book-reader"></i></span>
                                                </div>
                                                <input type="text" id="course_name" name="course_name" value="" class="form-control is-valid" placeholder="Course Name" required="required" size="100">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="course_duration">Course Duration</label>
                                                </div>
                                                <select id="course_duration" name="course_duration" class="form-control custom-select">
                                                    <option value="1 Month">1 Month</option>
                                                    <option value="2 Months">2 Months</option>
                                                    <option value="3 Months">3 Months</option>
                                                    <option value="4 Months">4 Months</option>
                                                    <option value="5 Months">5 Months</option>
                                                    <option value="6 Months">6 Months</option>
                                                    <option value="7 Months">7 Months</option>
                                                    <option value="8 Months">8 Months</option>
                                                    <option value="9 Months">9 Months</option>
                                                    <option value="10 Months">10 Months</option>
                                                    <option value="11 Months">11 Months</option>
                                                    <option value="12 Months">12 Months</option>
                                                </select>
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="number_of_lecture">Number of Class</label>
                                                </div>

                                                <select id="number_of_lecture" name="number_of_lecture" class="form-control custom-select">
                                                    <option value="20">20</option>
                                                    <option value="25">25</option>
                                                    <option value="30">30</option>
                                                    <option value="35">35</option>
                                                    <option value="40">40</option>
                                                    <option value="45">45</option>
                                                    <option value="50">50</option>
                                                    <option value="55">55</option>
                                                    <option value="60">60</option>
                                                    <option value="65">65</option>
                                                    <option value="70">70</option>
                                                    <option value="75">75</option>
                                                    <option value="80">80</option>
                                                    <option value="85">85</option>
                                                    <option value="90">90</option>
                                                    <option value="95">95</option>
                                                    <option value="100">100</option>
                                                    <option value="105">105</option>
                                                    <option value="110">110</option>
                                                    <option value="120">120</option>
                                                    <option value="125">125</option>
                                                    <option value="130">130</option>
                                                    <option value="135">135</option>
                                                    <option value="140">140</option>
                                                    <option value="145">145</option>
                                                    <option value="150">150</option>
                                                </select>
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="class_length">Class Length</label>
                                                </div>
                                                <select id="class_length" name="class_length" class="form-control custom-select">
                                                    <option value="01:00 Hour">01:00 Hour</option>
                                                    <option value="01:30 Hour">01:30 Hour</option>
                                                    <option value="02:00 Hours">02:00 Hours</option>
                                                    <option value="02:30 Hours">02:30 Hours</option>
                                                    <option value="03:00 Hours">03:00 Hours</option>
                                                    <option value="03:30 Hours">03:30 Hours</option>
                                                    <option value="04:00 Hours">04:00 Hours</option>
                                                </select>
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="lecture_type">Lecture Type</label>
                                                </div>
                                                <select id="lecture_type" name="lecture_type" class="form-control custom-select">
                                                    <option value="01:00 Hour">Offline</option>
                                                    <option value="Online (Live)" selected>Online (Live)</option>
                                                    <option value="Online (Recorded)">Online (Recorded)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="course_price">Course Price:</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                                                </div>
                                                <input type="text" id="course_price" name="course_price" value="" class="form-control is-valid" placeholder="Course Price" required="required">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-outline-primary" type="button">Current Batch</button>
                                                </div>
                                                <select id="current_batch_number" name="current_batch_number" class="form-control custom-select">
                                                    <option value="01">01</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option>
                                                    <option value="04">04</option>
                                                    <option value="05">05</option>
                                                    <option value="06">06</option>
                                                    <option value="07">08</option>
                                                    <option value="08">08</option>
                                                    <option value="09">09</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>

                                                    <option value="15" selected>15</option>

                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                </select>
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-outline-success" type="button">Reg. Open</button>
                                                </div>
                                                <input type="text" id="registration_start_date" name="registration_start_date" class="form-control text-center" placeholder="YYYY-MM-DD">

                                                <input type="text" id="registration_closing_date" name="registration_closing_date" class="form-control text-center" placeholder="YYYY-MM-DD">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-success" type="button">Reg. Colse</button>
                                                </div>
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-outline-info" type="button">Class Start</button>
                                                </div>
                                                <input type="text" id="class_start_date" name="class_start_date" class="form-control text-center" placeholder="YYYY-MM-DD">

                                                <input type="text" id="class_end_date" name="class_end_date" class="form-control text-center" placeholder="YYYY-MM-DD">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-info" type="button">Class End</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="total_quizzes">Total Quizzes:</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-list-ol"></i></span>
                                                </div>
                                                <input type="text" id="total_quizzes" name="total_quizzes" value="" class="form-control is-valid" placeholder="Total Quizzes">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-diagnoses"></i></span>
                                                </div>
                                                <input type="text" id="total_exams" name="total_exams" class="form-control">
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="total_exams">Total Exams</label>
                                                </div>
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-file-signature"></i></span>
                                                </div>
                                                <input type="text" id="total_homework" name="total_homework" class="form-control">
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="total_homework">Homework</label>
                                                </div>
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-file-code"></i></span>
                                                </div>
                                                <input type="text" id="total_assignments" name="total_assignments" class="form-control">
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="total_assignments">Assignment</label>
                                                </div>
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-chalkboard-teacher"></i></span>
                                                </div>
                                                <input type="text" id="total_projects" name="total_projects" class="form-control">
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="total_projects">Total Projects</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label for="course_introduction">Course Introduction:</label>
                                            <textarea id="course_introduction" name="course_introduction" class="form-control" placeholder="Course Introduction">Course Introduction</textarea>
                                        </div>

                                        <div class="col-sm-12">
                                            <label for="course_description">Course Description:</label>
                                            <textarea id="course_description" name="course_description" class="form-control" placeholder="Course Description">Course Description</textarea>
                                        </div>

                                        <div class="col-sm-12">
                                            <label for="requirements">Course Requirements:</label>
                                            <textarea id="requirements" name="requirements" class="form-control" placeholder="Course Requirements">Course Requirements</textarea>
                                        </div>

                                        <div class="col-sm-12">
                                            <label for="course_outcomes">Course Outcomes:</label>
                                            <textarea id="course_outcomes" name="course_outcomes" class="form-control" placeholder="Course Outcomes">Course Outcomes</textarea>
                                        </div>

                                    </div>
                                    <hr>
                                    <div class="row text-right">
                                        <div class="col-sm-12">
                                            <a href="course-list.php" class="btn btn-sm btn-danger">Cancel</a>
                                            <input type="reset" class="btn btn-sm btn-primary">
                                            <input type="submit" class="btn btn-sm btn-success" name="save" value="Submit">
                                        </div>
                                    </div>
                                </form>
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
    $(function () {
        // Summernote
        $('#course_introduction').summernote();
        $('#course_description').summernote();
        $('#requirements').summernote();
        $('#course_outcomes').summernote();
    })

</script>

</body>
</html>

