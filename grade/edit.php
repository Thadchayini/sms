<?php
$edit_id=$_GET["grade_id"];

$con=mysqli_connect("localhost","root","","test_db");
$result=mysqli_query($con,"SELECT * FROM `grades` WHERE id=$edit_id");

$row=mysqli_fetch_assoc($result);


?>

<html>
    <head>
    </head>
    <body>
        <table>
            <form action="update.php" method="post">
            <input type="hidden" name="grade_id" id="grade_id" value="<?php echo $row["grade_id"];?>">
                <tr>
                    <th><label for="grade_name">Grade Name</label></th>
                    <td><input type="text" name="grade_name" id="grade_name" value="<?php echo $row['grade_name'] ?>"></td>
                </tr>
                <tr>
                    <th><label for="grade_ndex">Grade Index</label></th>
                    <td><input type="text" name="grade_ndex" id="grade_ndex" value="<?php echo $row['grade_index'] ?>"></td>
                </tr>
                <tr>
                    <th><label for="grade_color">Grade Colour</label></th>
                    <td><input type="color" name="grade_color" id="grade_color" value="<?php echo $row['grade_color'] ?>"></td>
                </tr>
                <tr>
                    <th><input type="submit" value="Submit"> <input type="reset" value="Clear"></th>
                </tr>
            </form>
        </table>
    </body>
</html>