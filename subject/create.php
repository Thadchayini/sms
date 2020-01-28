<?php
    $subject_name=$_POST["subject_name"];
    $subject_index=$_POST["subject_index"];
    $subject_color=$_POST["subject_color"];

    if (empty($_POST["subject_name"])){
        echo ("Please fill out the Emty Fields");
    }else if(empty($_POST["subject_index"])){
        echo ("Please fill out the Emty Fields");        
    }else if(empty($_POST["subject_color"])){
        echo ("Please fill out the Emty Fields");        
    }

    $con=mysqli_connect("localhost","root","","test_db");
    $result=mysqli_query($con,"INSERT INTO `subjects`(`subject_name`, `subject_index`, `subject_color`) VALUES ('$subject_name','$subject_index','$subject_color')") or die(mysqli_error($con));

    header("location:index.php");


?>