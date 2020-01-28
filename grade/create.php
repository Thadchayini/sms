<?php

    /*print_r($_POST);*/

    $grade_name=$_POST["grade_name"];
    $grade_index=$_POST["grade_index"];
    $grade_color=$_POST["grade_color"];

    if (empty($_POST["grade_name"])){
        echo ("Please fill out the Grade Name");
        return;
    }else if(empty($_POST["grade_index"])){
        echo ("Please fill out the Grade Name");
        return;
    }else if(empty($_POST["grade_color"])){
        echo ("Please fill out the Grade Name");
        return;
    }

    $con=mysqli_connect("localhost","root","","test_db");
    
    mysqli_query($con,"INSERT INTO `grades`(`grade_name`, `grade_index`, `grade_color`) VALUES ('$grade_name','$grade_index','$grade_color')") or die(mysqli_error($con));
    header("location:index.php");


?>
