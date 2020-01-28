<?php
    $id=$_GET["id"];
    $con=mysqli_connect("localhost","root","","test_db");

    $result=mysqli_query($con,"SELECT * FROM `subjects` WHERE id=$id");
    $row=mysqli_fetch_assoc($result);
?>

<html>
    <head>
    
    </head>
    <body>
        <form action="update.php" method="post">
            <table>
            <h3>Edit Subject Details</h3>
            <input type="hidden" id="id" name="id" value="<?php echo $row['id'];?>">
            <tr>
                <th><label for="subject_name">Subject Name</label></th>
                <td><input type="text" id="subject_name" name="subject_name" value="<?php echo $row['subject_name'];?>"></td>
            </tr>
            <tr>
                <th><label for="subject_index">Subject Index</label></th>
                <td><input type="text" id="subject_index" name="subject_index" value="<?php echo $row['subject_index'];?>"></td>
            </tr>
            <tr>
                <th><label for="subject_color">Subject Colour</label></th>
                <td><input type="color" id="subject_color" name="subject_color" value="<?php echo $row['subject_color'];?>"></td>
            </tr>
            <tr>
                <th><input type="submit" value="Submit"> <input type="reset" value="Clear"></th>
            </tr>
            </table>
        </form>
    </body>
</html>