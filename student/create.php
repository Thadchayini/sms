<?php
$first_name=$_POST["first_name"];
$last_name=$_POST["last_name"];
$gender=$_POST["gender"];
$address=$_POST["address"];
$grade=$_POST["grade"];
// $subject=$_POST["subject"];

if (empty($_POST["first_name"])){
    echo ("Please fill out the Emty Fields");
}else if(empty($_POST["last_name"])){
    echo ("Please fill out the Emty Fields");    
}else if(empty($_POST["gender"])){
    echo ("Please fill out the Emty Fields");    
}else if(empty($_POST["address"])){
    echo ("Please fill out the Emty Fields");    
}else if(empty($_POST["grade"])){
    echo ("Please fill out the Emty Fields");    
}

//print_r($subject);

// $subject_string=implode(",",$subject);  //To change the subject array as String

//echo $subject_string;

$con=mysqli_connect("localhost","root","","test_db");

mysqli_query($con,"INSERT INTO `students`(`first_name`, `last_name`, `gender`, `grade`, `address`) VALUES ('$first_name','$last_name','$gender','$grade','$address')") or die(mysqli_error($con));

header("location:index.php");

?>