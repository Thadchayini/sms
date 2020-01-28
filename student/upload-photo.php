<?php

    $id=$_GET["student_id"];
    $con=mysqli_connect("localhost","root","","test_db");

    $result=mysqli_query($con,"SELECT * FROM `students` WHERE student_id=$id");
    $row=mysqli_fetch_assoc($result);

?>

<html>
    <head>
        <style>
            table 
            {
                margin-bottom:20px;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>Full Name:</th>
                <td><?php echo $row['first_name']." ".$row['last_name']; ?></td>
            </tr>
        </table>
        <form action="photo-insert.php" method="post" enctype="multipart/form-data">
            <h4>Upload photo</h4>
            <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">

            <input type="file" name="photo" id="photo">

            <input type="submit" value="Upload"> <input type="reset" value="Clear">
        </form>
    </body>
</html>