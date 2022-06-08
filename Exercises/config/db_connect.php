<?php 
// db connection 
$host = "localhost";
$user = "root";
$pass = "";
$db = "basic_project";

$conn = mysqli_connect($host, $user, $pass, $db);

if ($conn) {
  echo "Connected";
} else {
  echo "Not Connected"; 
}