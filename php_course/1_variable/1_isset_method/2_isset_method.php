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
  $a = array('test' => 1, 'hello' => null, 'pie' => array('a' => 'apple'));
  
  var_dump(isset($a['test']));               // TRUE
  var_dump(isset($a['foo']));                // FALSE
  var_dump(isset($a['hello']));              // FALSE

  // The key 'hello' equals NULL so is considered unset
  // If you want to check for NULL key values then try:
  var_dump(array_key_exists('hello', $a)); // TRUE

// Checking deeper array values
var_dump(isset($a['pie']['a']));          // TRUE
var_dump(isset($a['pie']['b']));           // FALSE
var_dump(isset($a['cake']['a']['b']));    //FALSE
  ?>                            
</body>
</html>