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
function addNumbers(int $a, int $b){
  return $a +$b;
}
echo addNumbers(5, "5 says");
// since strict is NOT enabled "5 days" is Changed to int(5), and it will return 10 
?>
</body>
</html>