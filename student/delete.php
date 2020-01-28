<?php

    $delete_id=$_GET["student_id"];
    $con=mysqli_connect("localhost","root","","test_db");
    $result=mysqli_query($con,"DELETE FROM `students` WHERE student_id=$delete_id");

    header("location:index.php");
?>