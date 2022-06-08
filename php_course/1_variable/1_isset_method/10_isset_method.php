<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 
<form method="POST">
 
Enter Name : <input type="text" name="name"><br>
<br/>
<input type="submit" name="Submit1" value="Session">
<input type="submit" name="Submit2" value="View Seesion">
<input type="submit" name="Submit3" value="Destroy Session">
</form>

<?php
if (isset($_POST['Submit1'])) {
    $_SESSION["sname"]=$_POST["name"];
}

if (isset($_POST['Submit2'])) {
    if (isset($_SESSION["sname"])) {
        echo "The Session Value = " . $_SESSION["sname"];
    } else {
        echo "All Sessions Destoyed !!";
    }
}
if (isset($_POST['Submit3'])) {
    session_destroy();
}
?>
</body>
</html>