<?php 
// what is a variable?

// variables are containers for storing data

// variable types

/*
String
Integer
Float
Boolean
Array
Object
Null
Resource
*/
// Declare variables
$name = "Ashin"; // string
$age = 20; // integer
$isMale = true; // boolean
$height = 1.75; // float
$salary = 1000.50; // float

// print variables to the screen
echo $name . "<br>";
echo $age . "<br>";
echo $isMale . "<br>";
echo $height . "<br>";
echo $salary . "<br>";

// print the whole variable
var_dump($name, $age, $isMale, $height, $salary);
echo "<br>";

echo gettype($name) . "<br>";

// variable checking fucntions

is_string($name); // true
is_int($age); // true
is_bool($isMale); // true
is_float($height); // true
is_float($salary); // true
is_double($salary); // true

// check if a variable is defined
isset($name); // true
var_dump(isset($name)); // true
echo "<hr>";
var_dump(isset($name_2)); // false

echo "<hr>";

// constants 
// constants are variables that cannot be changed
define("PI", 3.14); // define a constant
echo PI . "<br>"; // 3.14

//var_dump(defined("PI2", 3.24)); // true
echo "<hr>";
// php built-in contants
echo SORT_ASC . '<br>';
echo SORT_DESC . '<br>';
echo SORT_REGULAR . '<br>';
echo SORT_NUMERIC . '<br>';
echo SORT_STRING . '<br>';
echo SORT_NATURAL . '<br>';
echo SORT_FLAG_CASE . '<br>';