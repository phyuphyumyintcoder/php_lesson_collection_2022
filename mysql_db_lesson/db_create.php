<?php
// create database
include("db_connect.php");
$db_create = "CREATE DATABASE IF NOT EXISTS `lesson_one_db`";
$db_create_result = mysqli_query($conn, $db_create);

if ($db_create_result) { 
    echo "Database created successfully";
} else { 
    echo "Filed to created database";
}
?>