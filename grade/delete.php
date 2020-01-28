<?php

    $delete_id=$_GET["grade_id"];
    $con=mysqli_connect("localhost","root","","test_db");
    mysqli_query($con,"DELETE FROM `grades` WHERE id=$delete_id") or die(mysqli_error($con));
    header("location:index.php");

?>