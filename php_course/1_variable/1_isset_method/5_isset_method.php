<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form asction=""
   enctype="multipart/form-data" method="POST">
   Select image :
   <input type="file" name="file"><br/>
   <input type="submit" value="Upload" name="submit"><br/>
   
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $fille = $_FILES['file'];
        $fileName = $file['file']['name'];
        $file_tmpName = $FILES['file']['tmp_name'];
    }   $fileSize = $file['size'];?>
</body>
</html>