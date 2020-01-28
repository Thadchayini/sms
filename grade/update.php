<?php

    $grade_name=$_POST["grade_name"];
    $grade_index=$_POST["grade_index"];
    $grade_color=$_POST["grade_color"];
    $grade_id=$_POST["grade_id"];
    $con=mysqli_connect("localhost","root","","test_db");
    mysqli_query($con,"UPDATE `grades` SET `grade_name`='$grade_name',`grade_index`='$grade_index',`grade_color`='$grade_color' WHERE grade_id=$grade_id") or die(mysqli_error($con));
    header("location:index.php");
?>