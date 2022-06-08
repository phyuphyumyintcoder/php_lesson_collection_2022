<?php 
include('../config/db_connect.php');
include('../class/Chapter.php');
$data = [
    'chapter_name' => $_POST['chapter_name'],
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s'),
];
$table = new Chapter();
$table->insert_data_chapter($conn, $data);

if ($table) {
    header("Location: ../chapter_index.php");
}else{
    echo "Failed to insert data";
}