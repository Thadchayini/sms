<?php
    $id=$_GET["id"];
    $con=mysqli_connect("localhost","root","","test_db");;

    $result=mysqli_query($con,"SELECT `first_name`, `last_name` FROM `students` WHERE id=$id");
    $row=mysqli_fetch_assoc($result);

    $result_subject=mysqli_query($con,"SELECT * FROM `subjects`");
?>
<html>
    <head>
        <style>
            table tr,th,td 
            {
                padding:10px;
            }
        </style>
    </head>
    <body>
        <form action="insert-subject.php" method="post">
        <input type="hidden" id="student_id" name="student_id" value="<?php echo $id;?>">
        <table>
            <tr>
                <th><label><b>Student Name:</b></label></th>
                <td><label><?php echo $row['first_name']." ".$row['last_name'];?></label></td>
            </tr>
            <tr>
                <th><label for="subject">Subject</label></th>
                <td><u>Choose Subjects</u></td>
                    <?php
                        while($row_subject=mysqli_fetch_assoc($result_subject))
                        {
                    ?>
                    <tr>
                        <th> </th>
                        <td>
                            <label for="subject"><input type="checkbox" id="subject" name="subject[]" value="
                            <?php echo $row_subject["id"];?>"><?php echo $row_subject["subject_name"];?></label>
                        </td>
                    </tr>
                    
                    
                    <?php
                        }
                    ?>    
            </tr>
            <tr>
                <th><input type="submit" value="Submit"> <input type="reset" value="Clear"></th>
            </tr>
            </table>
        </form>
    </body>
</html>