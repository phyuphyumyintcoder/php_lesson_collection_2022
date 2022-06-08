<?php
//array_combine
//array_combine() creates an array by using the values from the keys array as keys and the values from the values array as the corresponding values.
//array_combine() returns an array with the keys from the keys array and the values from the values array.
//Parameters:
//$keys - Array of values that will be used as keys in the returned array.
//$values - Array of values that will be used as values in the returned array.
$first_name = array("Peter", "Ben", "Joe");
$last_name = array("Parker", "Smith", "Doe");
$combined = array_combine($first_name, $last_name);
print_r($combined);