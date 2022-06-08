<?php
// array_column
// array_column() returns the values from a single column in the input array.
// array_column() returns an array of values from a single column in the input array.
// Parameters:
// $array - The input array.
// $column_key - If the input array is an associative array, you can define which key to return an array of values from.
$a = array(
    array(
        "first_name" => "Peter",
        "last_name" => "Parker",
        "email" => "ashin@gmail.com"),
    array(
        "first_name" => "Ben",
        "last_name" => "Smith",
        "email" => "ben@gmail.com"),
    array(
        "first_name" => "Joe",
        "last_name" => "Doe",
        "email" => "joe@gmail.com")
       );
    $last_name = array_column($a, 'last_name');
    print_r($last_name);