<?php
// create users table
include("db_connect.php");
$create_user_table = "CREATE TABLE IF NOT EXISTS users (
    id int(11) NOT NULL AUTO_INCREMENT,
    username varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    created_at datetime NOT NULL,
    updated_at datetime NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
$create_user_table_result = mysqli_query($conn, $create_user_table);

if ($create_user_table_result) {
    echo "Table users created successfully";
}else{
    echo "Failed to create table users";
}