<?php

    /*print_r($_POST);*/

    $name=$_POST["name"];
    $index=$_POST["index"];
    $color=$_POST["color"];

    if(empty($name))
    {
        die("Please Enter the name");
    }
    $con=mysqli_connect("localhost","root","","test_db");
    
    mysqli_query($con,"INSERT INTO `students-grade`(`grade_name`, `grade_index`, `grade_color`) VALUES ('$name','$index','$color')") or die(mysqli_error($con));
    header("location:index.php");

?>
