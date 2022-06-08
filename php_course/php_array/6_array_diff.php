<?php 
// array_diff
// array_diff() compares the values of two (or more) arrays, and returns the values in array1 that are not present in any of the others.
// array_diff() returns an array with the values in array1 that are not present in any of the others.
// Parameters:
// $array1 - An array with keys and values.
// $array2 - An array with keys and values.
// $array3 - An array with keys and values.
// ... - More arrays.
// $arrayN - An array with keys and values.
// $array1, $array2, $array3, ... $arrayN - Arrays to be compared.
// $array1, $array2, $array3, ... $arrayN - Arrays to be compared.
// $array1, $array2, $array3, ... $arrayN - Arrays to be compared.
// $array1, $array2, $array3, ... $arrayN - Arrays to be compared.
$a1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$a2 = array("a" => "green", "yellow", "red");
$a3 = array("a" => "green", "b" => "brown");
$result = array_diff($a1, $a2, $a3);
print_r($result);