<?php 

// insert into users table
include("db_connect.php");
$insert_user_data = "INSERT INTO users (`username`, password, email, created_at, `updated_at`) VALUES
('admin', 'admin', 'admin@gmail.com', Now(), Now()),

('user', 'user', 'user@gmail', Now(), Now());";
$insert_user_data_result = mysqli_query($conn, $insert_user_data);
if ($insert_user_data_result) {
    echo "Data inserted successfully";
}else{
    echo "Failed to insert data";
}