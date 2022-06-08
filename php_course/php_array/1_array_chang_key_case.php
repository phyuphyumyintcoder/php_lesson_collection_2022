Ashin Indavudha, [4/29/2022 9:00 AM]
<?php 
// array_change_key_case
// array_change_key_case() changes the case of all keys in an array.
// array_change_key_case() returns an array with its keys lowercased or uppercased, depending on the case parameter.
// Parameters:
// $array - An array with keys to be changed.

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
print_r(array_change_key_case($age, CASE_UPPER));