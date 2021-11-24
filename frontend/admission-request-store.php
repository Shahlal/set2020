<?php

if(isset($_POST['save'])) {

    require_once "db_connection.php";

    $name               = $_POST['name'];
    $fatherName         = isset($_POST['father_name']) ? $_POST['father_name'] : NULL;
    $motherName         = isset($_POST['mother_name']) ? $_POST['mother_name'] : NULL;
    $mobile             = $_POST['mobile'];
    $email              = $_POST['email'];
    $dob                = $_POST['dob'];
    $maritalStatus      = isset($_POST['marital_status']) ? $_POST['marital_status'] : NULL;
    $lastEducation      = $_POST['last_education'];
    $hasLaptop          = $_POST['has_laptop'];
    $birthcert          = isset($_POST['birthcert']) ? $_POST['birthcert'] : NULL;
    $nid                = isset($_POST['nid']) ? $_POST['nid'] : NULL;
    $division           = $_POST['division'];
    $district           = $_POST['district'];
    $permanentAddress   = isset($_POST['permanent_address']) ? $_POST['permanent_address'] : NULL;
    $presentAddress     = isset($_POST['present_address']) ? $_POST['present_address'] : NULL;
    $tradeName          = $_POST['trade_name'];
    $hasPreviousSession = $_POST['has_previous_session'];
    $isAgreeWithTerms   = $_POST['terms'];
    $session            = 15;
    $batch              = 1;
    $studentID          = "STD-".rand(100000, 999999);

    $sql = "INSERT INTO admission_requests (student_id, student_name, father_name, mother_name, mobile, email, dob, marital_status, last_education, has_laptop, birthcert, nid, division, district, permanent_address, present_address, trade_name, has_previous_session, is_agree_with_terms, session, batch)
    VALUES ('$studentID', '$name', '$fatherName', '$motherName', '$mobile', '$email', '$dob', '$maritalStatus', '$lastEducation', '$hasLaptop', '$birthcert', '$nid', '$division', '$district', '$permanentAddress', '$presentAddress', '$tradeName', '$hasPreviousSession', '$isAgreeWithTerms', '$session', '$batch')";

    $execute = mysqli_query($connection, $sql);

    if ($execute) {
        header("location: index.php");
        mysqli_close($connection);
        exit();
    } else {
        echo "Error: " . $sql . " " . mysqli_error($execute);
        mysqli_close($connection);
    }
}
?>
