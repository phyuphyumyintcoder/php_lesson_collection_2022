<?php 
// user create fucntion
include("../config/db_connect.php");
function insert_data_user($conn, $data){
    $name = $data['username'];
    $email = $data['email'];
    $password = $data['password'];
    $phone = $data['phone'];
    $address = $data['address'];
    $insert_user_data = "INSERT INTO users (`username`, email, password, phone, address, created_at, `updated_at`) VALUES 
    ('$name', '$email', $password', '$phone', 'address', Now(), Now());";
    $insert_user_data_result = mysqli_query($conn, $insert_user_data);
    if ($insert_user_data_result) {
        //echo "Data inserted successfully";
        header("Location: ../users/index.php");
    }else{
        echo "Failed to insert data";
    }
}

// get users data
function get_uaera_table_data($conn)
{
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    $users_table_data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $users_table_data; 
}
?>