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
        <form action="create.php" method="post">
        <table>
            <h3>Subject Details</h3>
            <tr>
                <th><label for="subject_name">Subject Name</label></th>
                <td><input type="text" id="subject_name" name="subject_name" required></td>
            </tr>
            <tr>
                <th><label for="subject_index">Subject Index</label></th>
                <td><input type="text" id="subject_index" name="subject_index" required></td>
            </tr>
            <tr>
                <th><label for="subject_color">Subject Colour</label></th>
                <td><input type="color" id="subject_color" name="subject_color" required></td>
            </tr>
            <tr>
                <th><input type="submit" value="Submit"> <input type="reset" value="Clear"></th>
            </tr>
        
        </table>   
        </form>
    </body>

</html>