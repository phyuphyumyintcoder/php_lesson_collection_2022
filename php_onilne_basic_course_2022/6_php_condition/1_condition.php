<?php
$age = 20;
$salary = 300000;

// simple if statement
if ($age == 20) {
    echo "You are an adult";
} 

echo "<hr>";

// without circle brackets
if ($age == 20)
    echo "You are an adult";

    echo "<hr>";

    // if else statement

    if ($age == 20) {
        echo "You are an adult";
    } else {
        echo "You are not an adult";
    }

    echo "<hr>";

    // difference between == and ===
    $age == 20; // true
    $age === '20'; // true

    echo "<hr>";
    $age === 20; // true
    $age === '20'; // false


    echo "<hr>";
    // if AND 
    if ($age == 20 && $salary == 300000) {
        echo "You are an adult and you earn 300000";
    }

    // IF OR
    if ($age == 20 || $salary == 300000) {
        echo "You are an adult or you earn 300000";
    }
    echo "<hr>";
    // Ternary if
    echo $age < 22 ? 'Young' : 'Old';
    echo '<br>';

    echo "<hr>";
    // Short ternary
    $myAge = $age ?: 18; // Equivalent of "$age ? $age : 18"
    echo $myAge;

    // Null coalescing operator
    $var = isset($name) ? $name : 'John';
   // $var = $name ?? 'John'; // Equivalent of above 
    echo $var . '<br>';

    // Switch
    $userRole = 'admin'; // admin, editor, user

    switch ($userRole) {
        case 'admin':
            echo 'You can do anything<br>';
            break;
        case 'editor':
            echo 'You can edit content<br>';
            break;
        case 'user':
            echo 'You can view posts and comments<br>';
            break;
            default:
            echo 'Unknown role<br>';
    }