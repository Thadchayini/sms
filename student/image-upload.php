<?php

// echo "<pre>";
// print_r($_FILES);
// echo "<pre>";

// echo "<h1>" . $_FILES["photo"]["name"] . "</h1>";

$imagePath = "./images/" . $_FILES["photo"]["name"];

if(move_uploaded_file($_FILES["photo"]["tmp_name"], $imagePath))
{
    echo "Image successfully uploade.";
}

// $path=$_POST["imagePath"];


// $image = $_FILES['image_path']['image_description'];
// $img = "images/";
$student_id= $_POST['student_id'];
$con = mysqli_connect("localhost","root","","test_db");
$result = mysqli_query($con,"UPDATE students SET image_path = '$imagePath' where student_id ='$student_id'") or die(mysqli_error($con));

header("location:index.php");

?>

<!-- <img src = "<?php echo $imagePath; ?>" alt = "photo" height = "100px" width = "100px"/> -->