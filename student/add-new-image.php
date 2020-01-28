<!DOCTYPE html>
<html lang="en">
<body>
    <form action="upload-photo.php" method="post" enctype = "multipart/form-data">
    <table>
    <input type = "hidden" name = "student_id" value = "<?php echo $_GET["student_id"]; ?>">
    
    <td>Select image to upload:</td>
    <td><input type="file" name="photo" /></td>
    </tr>
    <tr>
    <td><input type="submit" value = "upload"/></td>
    </tr>
    </table>
    </form>
</body>
</html