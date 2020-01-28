<?php
    $con=mysqli_connect("localhost","root","","test_db");
    $result=mysqli_query($con,"SELECT * FROM `subjects`");
?>
<html>
    <head>
        <style>
            table tr,th,td 
            {
                height:50px;
            }
            table 
            {
                margin-top:20px;
            }
        </style>
    </head>
    <body>
        <a href="subject-create">Add New</a>
        <table style="width:50%;" border="1">
        
            <tr style="background-color:black; color:white;">
                <th>ID</th>
                <th>Subject Name</th>
                <th>Subject Index</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        <?php
            while($row=mysqli_fetch_assoc($result))
            {
        ?>
            <tr style="background-color:<?php echo $row['subject_color'];?>">
                <td><?php echo $row["subject_id"]; ?></td>
                <td><?php echo $row["subject_name"];?></td>
                <td><?php echo $row["subject_index"]; ?></td>
                <td><a href="edit.php?subject_id=<?php echo $row['subject_id'];?>">Edit</a></td>
                <td><a href="delete.php?subject_id=<?php echo $row['subject_id'];?>" onclick="return confirm('Do You want to Delete?')">Delete</a></td>
            </tr>
        <?php
            }
        ?>
        </table>
    </body>
</html>