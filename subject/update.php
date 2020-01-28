<?php
    $id=$_POST["id"];
    $name=$_POST["subject_name"];
    $index=$_POST["subject_index"];
    $color=$_POST["subject_color"];

    $con=mysqli_connect("localhost","root","","test_db");
    $result=mysqli_query($con,"UPDATE `subjects` SET `subject_name`='$name',`subject_index`='$index',`subject_color`='$color' WHERE id=$id") or die(mysqli_error($con));

    header("location:index.php");
?>

