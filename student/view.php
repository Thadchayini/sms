<?php
    $subject_id=$_GET["subject_id"];

    $con=mysqli_connect("localhost","root","","test_db");

    $result_student=mysqli_query($con,"SELECT `students`.`student_id`, `first_name`, `last_name`, `gender`, `students-grade`.`grade_name`, `address`, `image_path` FROM `students` inner join `students-grade` on `students`.`Grade`=`students-grade`.`id` WHERE `students`.`student_id`=$id");
    $row_student=mysqli_fetch_assoc($result_student);
    

    $result_subject=mysqli_query($con,"SELECT `student_id`, `subject_id`,`subjects`.`subject_name` FROM `students_subjects` inner join `subjects` on `students_subjects`.`subject_id`=`subjects`.`subject_id` WHERE `students_subjects`.`student_id`=$id");
    
    
?>

<html>
    <head>
        <style>
            img 
            {
                margin-left:100px;
                margin-top:10px;
            }
            table 
            {
                margin-left:50px;
                margin-top:20px;
            }
            table tr,th,td 
            {
                text-align:left;
                font-size:20px;
                padding:10px;
            }
            
            .subject 
            {
                padding:1px;
            }
        </style>
    </head>
    <body>
        <h1><?php echo $row_student["first_name"]." ".$row_student["last_name"]; ?></h1>
        <img src="<?php echo $row_student['image_path'];?>" width="75px" height="100px" alt="image">
        <table>
            <tr>
                <th>First Name</th>
                <td><?php echo $row_student["first_name"]; ?></td>
            </tr>
            <tr>
                <th>Last Name</th>
                <td><?php echo $row_student["last_name"]; ?></td>
            </tr>
            <tr>
                <th>Gender</th>
                <td><?php echo $row_student["gender"]; ?></td>
            </tr>
            <tr>
                <th>Grade</th>
                <td><?php echo $row_student["grade_name"] ?></td>
            </tr>
            <tr>
                <th>Subjects</th>
                <td>Choosed Subjects</td>
            </tr>
            <tr>
                <th>
                </th>
                <td class="subject">
                    <ul type="number">
                        <?php 
                            while($row_subject=mysqli_fetch_assoc($result_subject))
                            {
                        ?>
                        <li><?php echo $row_subject["subject_name"];?></li>

                        <?php
                            }
                        ?>
                    </ul>
                </td>
            </tr>
        </table>
    </body>
</html>