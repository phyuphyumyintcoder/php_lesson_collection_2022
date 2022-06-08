<?php
// create simple string
$strings = "Hello World!";
echo $strings . "<br>";

// string concatenation

$strings_con = "Hello " . "World!";
echo $strings_con . "<br>";

// string fucntion
$text_data = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro pariatur ea necessitatibus deleniti sint fuga velit, tenetur non doloremque beatae corporis ullam, ipsum eligendi natus quod debitis. Veniam, quo atque.";
echo "1 - " . strlen($text_data) . "<br>";

echo "<hr>";

$text_data_2 = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro pariatur ea necessitatibus deleniti sint fuga velit, tenetur non doloremque beatae corporis ullam, ipsum eligendi natus quod debitis. Veniam, quo atque.";
echo "2 - " . trim($text_data_2) . "<br>";


$text_data_3 = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro pariatur ea necessitatibus deleniti sint fuga velit, tenetur non doloremque beatae corporis ullam, ipsum eligendi natus quod debitis. Veniam, quo atque.";
echo "3 - " . ltrim($text_data_3) . "<br>";


$text_data_4 = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro pariatur ea necessitatibus deleniti sint fuga velit, tenetur non doloremque beatae corporis ullam, ipsum eligendi natus quod debitis. Veniam, quo atque.";
echo "4 - " . rtrim($text_data_4) . "<br>";
echo "<hr>";

$text_data_5 = " go come buy some milk";
echo "5 - " . str_word_count($text_data_5) . "<br>";

echo "<hr>";

$text_data_6 = " go come buy some milk";
echo "6 - " . strrev($text_data_6) . "<br>";

echo "<hr>";

$text_data_7 = " go come buy some milk";
echo "7- " . strtoupper($text_data_7) . "<br>";

echo "<hr>";
$text_data_8 = " GO COME BUY SOME MILK";
echo "8 - " . strtolower($text_data_8) . "<br>";

echo "<hr>";

echo "9 - " . ucfirst("hello") . "<br>";

echo "<hr>";

echo "10 - " . lcfirst("Hello") . "<br>";

echo "<hr>";

echo "11 - " . ucwords("hello world") . "<br>";

echo "<hr>";
$text = "Hello World!";
echo "12 - " . strpos($text, 'World') . "<br>";

echo "<hr>";

$text = "Hello World!";
echo "13 - " . stripos($text, 'World') . "<br>";

echo "<hr>";
echo "14 - " . substr($text, 6,5) . "<br>";

echo "<hr>";
echo "15 - " . str_replace('World', 'Universe', $text) . "<br>";

echo "<hr>";
echo "16 - " . str_replace('World', 'Universe', $text) . "<br>";


?>