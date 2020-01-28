<?php

/*$edit_id=$_GET["id"];*/

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$gender=$_POST["gender"];
$grade=$_POST["grade"];
$address=$_POST["address"];
// $subject=$_POST["subject"];

$student_id=$_POST["student_id"];

//print_r($subject);

// $subject_string=implode(",",$subject);  //To change the subject array as String

$con=mysqli_connect("localhost","root","","test_db");

mysqli_query($con, "UPDATE `students` SET `first_name`='$fname',`last_name`='$lname',`gender`='$gender',`grade`='$grade',`address`='$address' WHERE student_id=$student_id") or die(mysqli_error($con));

header("location:index.php");
?>