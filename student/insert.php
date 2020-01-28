<?php
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$gender=$_POST["gender"];
$address=$_POST["address"];
$grade=$_POST["grade"];

if(empty($fname))
    {
        die("Please enter the First Name");
    }
if(empty($lname))
    {
        die("Please enter the Last Name");
    }
if(empty($gender))
    {
        die("Please enter the Gender");
    }
if(empty($address))
    {
        die("Please enter the Address");
    }
if(empty($grade))
    {
        die("Please enter the Grade");
    }

$con=mysqli_connect("localhost","root","","test_db");

mysqli_query($con,"INSERT INTO `students`(`first_name`, `last_name`, `gender`, `Grade`,`address`) VALUES ('$fname','$lname','$gender','$grade','$address')") or die(mysqli_error($con));

header("location:index.php");

?>