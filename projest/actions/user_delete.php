<?php 

include("../config/db_connect.php");

// user delete

include("../user_function.php");
// user delete
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $table = delete_data_user($conn, $id);
    if ($table) {
        header("Location: display_data.php");
    }else{ 
        echo "Failed to delete data";
    }
}