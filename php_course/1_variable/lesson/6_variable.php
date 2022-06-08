<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
 $var;
 var_dump($var) ;   // Warning : Undefined Variable  // NULL
 $var =123;
 var_dump($var) ;   // int(123)
 $var = "abc";
 var_dump($var) ;   // String (3) "abc"
 ?>
</body>
</html>