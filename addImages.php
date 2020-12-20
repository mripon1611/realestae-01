<!DOCTYPE html>
<html>
    <head>
        <title>Upload Image</title>
    </head>
    <body>
        <from action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="file">
            <button type="submit" name="submit">
                Save Image
            </button>
        </from>
    </body>
</html>