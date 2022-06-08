<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
?<php 
function myTest() {
    $x = 5; // local scope
    echo "<p>Variable x inside function is: $x</P>";
}
myTest();

// using x outside the function will generate an error
echo "<P>Variable x outside function is: $x</P>";
?>
</body>
</html>