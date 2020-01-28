<?php
    $student_id=$_POST["student_id"];
    $subject_id=$_POST["subject"];

    if(empty($subject_id))
    {
        die("Please enter the subject");
    }

    $con=mysqli_connect("localhost","root","","test_db");

    foreach($subject_id AS $sub_id)
    {
        $result=mysqli_query($con,"INSERT INTO `students_subjects`(`student_id`, `subject_id`) VALUES ($student_id,$sub_id)") or die(mysqli_error($con));
    }
    header("location:../student/index.php");
?>