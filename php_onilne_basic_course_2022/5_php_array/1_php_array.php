<?php 
// create array
$fruits = array("apple",  "banana", "orange"); // index 0, 1, 2, 3 //
//numaric index array
// print the whole array
echo "<pre>";
var_dump($friuts);
echo "</pre>";
echo "<hr>";

//get tje e;ement form the array
echo $friuts[0] . "<br>";
echo $friuts[1] . "<br>";
echo $friuts[2] . "<br>";
echo $friuts[3] . "<br>";
echo "<hr>"
?>;

<?php

//create array
$fruits = ["Banana", "Apple", "Orange"];
// Print the whole array
echo '<pre>';
var_dump($fruits); // print_r
echo '</pre>';

// get the element by index
echo $fruits[1] . '<br>';

                        // set element by index
$fruits[0] ="Peach";
echo $fruits[0] . '<br>';
// check if array has element at index 2

echo '<pre>';
var_dump(isset($gruits[2]));
echo '</pre>';

// pirnt the length of the array
echo count($fruits) . '<br>';

//add element at the end of the array
$fruits[] = 'Peach';
echo $fruits[3] . '<br>';
array_push($fruits, 'Fool');
// remove element form the end of the array
array_pop($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// add element at the beginning of the array
array_unshift($fruits, 'Apple');
// remove element form the behinning of the array
array_shift($fruits);

// split the string into an array
$strings ="Banana, Apple, Peach";

echo '<pre>';
var_dump(explode(",", $strings));
echo '</pre>';

print_r($fruits);

// combine array element into string

echo implode(",", $fruits) . '<br>';
