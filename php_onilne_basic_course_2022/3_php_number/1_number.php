<?php
// declearing number variables
$a = 10; // int
$b = 2; // int
$c = 11.3; // float

// print variables to the screen
echo $a . "<br>";
echo $b . "<br>";
echo $c . "<br>";

// arithmetic operators
echo ($a + $b) . "<br>";
echo ($a - $b) . "<br>";
echo ($a * $b) . "<br>";
echo ($a / $b) . "<br>";
echo ($a % $b) . "<br>";

echo "<hr>";
echo ($a + $c) * $b . "<br>";

// assignment with math operators

$a += $b; 
echo $a . "<br>"; // 12

$a -= $b;
echo $a . "<br>"; // 10

$a *= $b; // 20
echo $a . "<br>";
$a /= $b;
echo $a . "<br>";

$a %= $b;
echo $a . "<br>";
echo "<hr>";

// increment and decrement operators

echo $a++ . "<br>"; // 10
echo $a-- . "<br>"; // 10
echo "<hr>";

// number checking function
is_float(12.45); // true
is_int(12); // true
is_numeric(12.45); // true
is_string("12.45 day"); // false

is_bool(true); // true
is_bool(false); // true
is_bool(1); // false

//convertion functions
$strNumbar = "12.45";
$number = (float)$strNumbar; // true
echo $number; // 12.45
echo "<hr>";

// number function
echo "abs(-15)".  abs(-15); // 15

echo "<hr>";
echo "pow (pow(2,3)" . pow(2, 3); // 8

echo "<hr>";

echo "sqrt(4)" . sqrt(100); // 2

echo "max(1, 2, 3, 4, 5)" . max(1, 2, 3, 4, 5); // 5

echo "min(1, 2, 3, 4, 5)" . min(1, 2, 3, 4, 5); // 1

echo "<hr>";
echo "round(1.5)" . round(1.5); // 2
echo "round(1.5)" . round(1.4); // 2

echo "<hr>";
echo "ceil(1.5)" . ceil(1.5); // 2
echo "ceil(1.4)" . ceil(1.4); // 2
echo "<hr>";
echo "floor(1.5)" . floor(1.5); // 1