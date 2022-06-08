<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php declare(strict_types=1); // strict requirement
function addNumbers(float $a, float $b) : int {
  return (int) ($a + $b);
} 
echo addNumbers(1.2, 5.2); 
?>
</body>
</html>
