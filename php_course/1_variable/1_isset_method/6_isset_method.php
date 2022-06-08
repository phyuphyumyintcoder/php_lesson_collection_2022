<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 
<form action="" enctype="multipart/form-data"
method="post">
Select image :
<input type="file" name="file"><br/>
<input type="submit" value="Upload" name="Submit1"><br/>

</form>
<?php
if (isset($_POST['Submit'])) {
 $filepath = "uploads/" . $_FILES["file"]["name"]; 

 if (move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) {
  echo "<img src=".$filepath." height=200 width=300 >";
 } else {
  echo "Error !!";
 }
} ?>
</body>
</html>