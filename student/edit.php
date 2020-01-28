
<?php

    $edit_id=$_GET["student_id"];
    $con=mysqli_connect("localhost","root","","test_db");
    $resultst=mysqli_query($con,"SELECT * FROM `students` WHERE student_id=$edit_id");

    $rowst=mysqli_fetch_assoc($resultst);

?>
<html>
    <head>
        <style>
            table 
            {
                padding:10px;
            }
            table tr,th,td
            {
                padding:10px;
            }
        </style>
    </head>
    <body>
        <table>
            <form action="update.php" method="post">
            <input type="hidden" name="student_id" id="student_id" value="<?php echo $rowst["student_id"];?>">        <!--Send id as hidden to next file-->
                <tr>
                    <th><label for="fname">First Name</label></th>
                    <td><input type="text" name="fname" id="fname" value="<?php echo $rowst["first_name"];?>"></td>
                </tr>
                <tr>
                    <th><label for="lname">Last Name</label></th>
                    <td><input type="text" name="lname" id="lname" value="<?php echo $rowst["last_name"];?>"></td>
                </tr>
                <tr>
                    <th><label for="gender">Gender</label></th>
                    <td><label><input type="radio" name="gender" id="gender" value="Male" <?php echo ($rowst["gender"]=="Male")?"checked":"";?>>Male <input type="radio" name="gender" id="gender" value="Female" <?php echo ($rowst["gender"]=="Female")?"checked":"";?>>Female</label></td>
                </tr>
                <?php
                    $con=mysqli_connect("localhost","root","","test_db");
                    $result=mysqli_query($con,"SELECT * FROM `grades`");

                    
                ?>
                <tr>
                    <th><label for="grade">Grade</label></th>
                    <td><select name="grade" id="grade">
                    <?php
                        $grade=$rowst["grade"];
                        while($row=mysqli_fetch_assoc($result))
                        {
                    ?>
                        <option value="<?php echo $row["grade_id"]; ?>" <?php echo ($row['grade_id']=="$grade")?"selected":""; ?>><?php echo $row["grade_name"]; ?></option>
 
                    <?php
                        }
                    ?>
                    </select></td>
                <!-- </tr>
                    <th><label for="subject">Subject</label></th>
                    <td>
                    <?php
                        while($row_subject=mysqli_fetch_assoc($result_subject))
                        {
                    ?>
                    
                    <input type="checkbox" id="subject" name="subject[]" value="<?php echo $row_subject["id"];?>"><?php echo $row_subject["subject_name"];?>
        
                    <?php
                        }
                    ?>
                    </td>
                </tr> -->
                <tr>
                    <th><label for="address">Address</label></th>
                    <td><textarea name="address" id="address" rows="2"><?php echo $rowst["address"]; ?></textarea></td>
                </tr>
                <tr>
                    <th></th>
                </tr>
                <tr>
                <th><input type="submit" value="Submit"> <input type="reset" value="Clear"></th>
                </tr>
            </form>
        </table>
    </body>
</html>