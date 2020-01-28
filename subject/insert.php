<?php
    $name=$_POST["subject_name"];
    $index=$_POST["subject_index"];
    $color=$_POST["subject_color"];

    if(empty($name))
    {
        die("Please enter the Subject Name");
    }
if(empty($index))
    {
        die("Please enter the Index");
    }
    
    $con=mysqli_connect("localhost","root","","test_db");
    $result=mysqli_query($con,"INSERT INTO `subjects`(`subject_name`, `subject_index`, `subject_color`) VALUES ('$name','$index','$color')") or die(mysqli_error($con));

    header("location:index.php");


?>