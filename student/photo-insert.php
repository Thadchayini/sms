<?php
    $student_id=$_POST["id"];
    // echo "<pre>";
    // print_r($_FILES);
    // echo "</pre>";

    //echo "<h1>".$_FILES["photo"]["name"]."</h1>";

    $imagePath="../uploads/".$_FILES["photo"]["name"];

    if(move_uploaded_file($_FILES['photo']['tmp_name'],$imagePath))
    {
        echo "Successfully uploaded";
    }
    else
    {
        echo "Uploaded fail";
    }
    
    $con=mysqli_connect("localhost","root","","test_db");
    $result=mysqli_query($con,"UPDATE `students` SET `image_path`='$imagePath' WHERE student_id=$student_id") or die(mysqli_error($con));
    header("location:index.php");
?>
<!-- <img src="<?php echo $imagePath; ?>" alt="image"> -->