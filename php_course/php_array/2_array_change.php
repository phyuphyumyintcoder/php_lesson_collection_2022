<?php 
// array_chunk
// array_chunk() splits an array into chunks.
// array_chunk() returns a multidimensional array, with the keys of the original array preserved.
// Parameters:
// $array - The input array.
// $size - The size of each chunk.
// $preserve_keys - If set to TRUE keys will be preserved. Default is FALSE.
$cars = array("Volvo", "BMW", "Toyota");
$arr = array_chunk($cars, 2);
print_r($arr);