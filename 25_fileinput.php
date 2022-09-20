<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Input</title>
</head>
<body>
    <!-- enctype="mutipart/form-data" is required to give information to server that files are included in this submission -->
    <form action="/26_fileupload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="photo" />
        <button type="submit">Send</button>
    </form>
</body>
</html>
