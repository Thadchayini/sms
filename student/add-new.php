<!doctype html>
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
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <script src="../js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class = "container">
            <div class = "card" style = "margin-top:30px;" class = "info-color white-text text-center py-4">

                <div class="card-header info-color white-text text-center py-4" style = "background-color:lightblue;">
                <div>Student Details</div>
                </div>
          
                <div class="card-body">

                    <form action="create.php" method="post" class="text-center">

                        <div class = "row">
                            <div class = "col-sm-4">
                                <label for="first_name">First Name</label>
                            </div>
                            <div class = "col-sm-4">
                                <input type="text" name="first_name" id="first_name" required>
                            </div>
                        </div>
                        <br/>
                        <div class = "row">
                            <div class = "col-sm-4">
                                <label for="last_name">Last Name</label>
                            </div>
                            <div class = "col-sm-4">
                                <input type="text" name="last_name" id="last_name" required>
                            </div>
                        </div>
                        <br/>
                        <div class = "row">
                            <div class = "col-sm-4">
                                <label for="gender">Gender</label>
                            </div>
                            <div class = "col-sm-4">
                                <input type="radio" name="gender" id="gender" value="Male">
                                <label>Male</label> 
                                <input type="radio" name="gender" id="gender" value="Female">
                                <label>Female</label>
                            </div>
                        </div>
                        <br/>
                        <?php
                            $con=mysqli_connect("localhost","root","","test_db");
                            $result=mysqli_query($con,"SELECT * FROM `grades`");
                        ?>

                        <div class = "row">
                            <div class = "col-sm-4">
                                <label for="grade">Grade</label>
                            </div>
                            <div class = "col-sm-4">
                                <select name="grade" id="grade" class="btn btn-secondary dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <option>Select Grade</option>
                                    <?php
                                        while($row=mysqli_fetch_assoc($result))
                                        {
                                    ?>
                                    <option value="<?php echo $row["grade_id"]; ?>"><?php echo $row["grade_name"],$row["grade_index"]; ?></option>

                                    <?php
                                        }
                                    ?>

                                </select>
                            </div>
                        </div>
                        <br/>
                        <div class = "row">
                            <div class = "col-sm-4">
                                <label for="address">Address</label>
                            </div>
                            <div class = "col-sm-4">
                                <textarea name="address" id="address" required></textarea>
                            </div>
                        </div>
                        <br/>
                        <div class = "row">
                            <div class = "col-sm-4">
                                <input type="submit" value="Submit"> <input type="reset" value="Clear"> <a href="index.php">Back to table</a>
                            </div>
                        </div>
                    </form>
                </div>
            
            </div>
        </div>
    </body>
</html>