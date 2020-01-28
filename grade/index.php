<?php
    $con=mysqli_connect("localhost","root","","test_db");
    $results=mysqli_query($con,"SELECT * FROM `grades`");
?>


<html>
    <head>
        <style>
            table 
            {
                width:75%;
            }
            table tr,th,td 
            {
                border:1px solid black;
                height:50px;
            }
        </style>
    
    </head>
    <body>
        <table>
            <tr>
                <th>Grade ID</th>
                <th>Grade Name</th>
                <th>Grade Index</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
            <?php
                while($row=mysqli_fetch_assoc($results))
                {
            ?>
                <tr style="background-color:<?php echo $row['grade_color'];?>">
                    <td><?php echo $row["grade_id"];?></td>
                    <td><?php echo $row["grade_name"];?></td>
                    <td><?php echo $row["grade_index"];?></td>
                    <td><a href="delete.php?grade_id=<?php echo $row['grade_id'];?>" onclick="return confirm('Do You Want to Delete?')">Delete</a></td>
                    <td><a href="edit.php?grade_id=<?php echo $row['grade_id'];?>">Edit</a></td>
                </tr>
            <?php
                }
            ?>
        </table>
    </body>
</html>