<?php

if(isset($_POST['save'])) {

    require_once "db_connection.php";

    $courseName                 = $_POST['course_name'];
    $courseDuration             = $_POST['course_duration'];
    $numberOfLecture            = $_POST['number_of_lecture'];
    $classLength                = $_POST['class_length'];
    $lectureType                = $_POST['lecture_type'];

    $coursePrice                = $_POST['course_price'];
    $currentBatchNumber         = $_POST['current_batch_number'];
    $registrationStartDate      = $_POST['registration_start_date'];
    $registrationClosingDate    = $_POST['registration_closing_date'];
    $classStartDate             = $_POST['class_start_date'];
    $classEndDate               = $_POST['class_end_date'];

    $totalQuizzes               = $_POST['total_quizzes'];
    $totalExams                 = $_POST['total_exams'];
    $totalHomework              = $_POST['total_homework'];
    $totalAssignments           = $_POST['total_assignments'];
    $totalProjects              = $_POST['total_projects'];

    $courseIntroduction         = $_POST['course_introduction'];
    $courseDescription          = $_POST['course_description'];
    $requirements               = $_POST['requirements'];
    $courseDuration             = $_POST['course_outcomes'];

    $courseCode                 = "CRS-00001";

//    $XXXXXXXXXXX         = $_POST['XXXXXXXXXXXXXXX'];



    $sql = "INSERT INTO admission_requests (course_name, crouse_code, course_duration, number_of_lecture, class_length, lecture_type, course_price, current_batch_number, registration_start_date, registration_closing_date, class_start_date, class_end_date, total_quizzes, total_exams, total_homework, total_assignments, total_projects, course_introduction, course_description, requirements, course_outcomes)
    VALUES ('$courseName', '$courseCode', '$courseDuration', '$numberOfLecture', '$classLength', '$lectureType', '$coursePrice', '$currentBatchNumber', '$registrationStartDate', '$registrationClosingDate', '$classStartDate', '$classEndDate', '$totalQuizzes', '$totalExams', '$totalHomework', '$totalAssignments', '$totalProjects', '$courseIntroduction', '$courseDescription', '$requirements', '$courseDuration')";

    $execute = mysqli_query($connection, $sql);

    if ($execute) {
        header("location: course-list.php");
        mysqli_close($connection);
        exit();
    } else {
        echo "Error: " . $sql . " " . mysqli_error($execute);
        mysqli_close($connection);
    }
}
?>
