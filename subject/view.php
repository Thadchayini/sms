<!doctype html>
<?php
    $student_id=$_GET["student_id"];
    $con=mysqli_connect("localhost","root","","test_db");
    $request=mysqli_query($con,"SELECT `subject_name`, `subject_index`, `subject_color` FROM `subjects` where grade_id=$grade") or die(mysqli_error($con));
    $row=mysqli_fetch_assoc($request);
?>

<?php
    $request_student=mysqli_query($con,"SELECT students.`student_id`, `first_name`, `last_name`, `gender`,`grades`.`grade_name`,`grades`.`grade_color`, `address`,`students`.`grade` FROM `students` inner join `grades` on students.grade=`grades`.`grade_id` and `students`.`grade`=$grade");
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
       <div class = "container">
       <div class = "card" style = "margin-top:30px;">
       <div class="card-header info-color white-text text-center py-4" style = "background-color:lightblue;">
        <h3 style="font-size:20px;"><u>Grade <span style="color:<?php echo $row["grade_color"];?>;"><?php echo $row["grade_name"];?></span> students Details</u></h3>
        </div>
        <div class = "card-body">
        <table  class = "table table-striped"> 
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Address</th>
            </tr>
            <?php
                while($row_student=mysqli_fetch_assoc($request_student))
                {
            ?>
            <tr style="background-color:<?php echo $row['grade_color']; ?>">
                <td><?php echo $row_student["student_id"];?></td>
                <td><?php echo $row_student["first_name"];?></td>
                <td><?php echo $row_student["last_name"];?></td>
                <td><?php echo $row_student["gender"];?></td>
                <td><?php echo $row_student["address"];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
        <a href="student-table.php">Back to student table</a>
        </div>
        </div>
        </div>
    </body>
</html>