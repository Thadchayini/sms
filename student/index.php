<!doctype html>

        <?php
        
             $con=mysqli_connect("localhost","root","","test_db");

             $result=mysqli_query($con,"SELECT students.`student_id`,`image_path`, `first_name`, `last_name`, `gender`,`grades`.`grade_name`,`grades`.`grade_color`, `address`,`students`.`grade` FROM `students` inner join `grades` on students.grade=`grades`.`grade_id`");

        ?>
<html>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <script src="../js/bootstrap.min.js"></script>
    </head>
    <body>
    
    <div class = "container" style = "margin-top:30px;">
    <table class = "table table-striped">
        <tr>
             <th>Image</th>
             <th>ID</th>
             <th>First Name</th>
             <th>Last Name</th>
             <th>Gender</th>
             <th>Grade</th>
             <th>Address</th>
             <th>Delete</th>
             <th>Edit</th>
             <th>Add Subject</th>
             <th>Upload Image</th>
        </tr>
        <?php
        while($row=mysqli_fetch_assoc($result))
        {
          
        ?>
            <tr style="background-color:<?php echo $row['grade_color']; ?>">
                
        <td><img src="<?php echo $row["image_path"];?>" height="50" width="50" alt = "image"/></td>
                
                <td><?php echo $row["student_id"];?></td>
                <td><?php echo $row["first_name"];?></td>
                <td><?php echo $row["last_name"];?></td>
                <td><?php echo $row["gender"];?></td>
                <td><a href="show.php?grade=<?php echo $row['grade'];?>"> <?php echo $row["grade_name"];?></a></td>
                <td><?php echo $row["address"];?></td>
                <td><a href="delete.php?student_id=<?php echo $row['student_id'];?>" onclick="return confirm('Do You Want to Delete?')">Delete</a></td>
                <td><a href="edit.php?student_id=<?php echo $row['student_id'];?>">Edit</a></td>
                <td><a href="add-subject.php?student_id=<?php echo $row['student_id']; ?>">Add Subject</a></td>
                <td><a href="upload-photo.php?student_id=<?php echo $row['student_id']; ?>">Upload Image</a></td>

            </tr>
        <?php
        }
        ?>
    </table>
    <a href="../add-new.php">Add New</a>
    <a href="../subject/index.php">Subject</a>
    <a href="../grade/index.php">Grade</a>
    
    
    </div>
    </body>
</html>












