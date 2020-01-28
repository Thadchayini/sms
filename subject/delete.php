<?php
    $id=$_GET["id"];
    $con=mysqli_connect("localhost","root","","test_db");
    $result=mysqli_query($con,"DELETE FROM `subjects` WHERE id=$id") or die(mysqli_error($con));

    header("location:index.php");
?>