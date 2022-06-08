<?php 

include("../config/db_connect.php");
// chapter delete
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM chapters WHERE id = {$id}";
    if ($conn->query($sql) === TRUE) {
        header("Location: ../chapter_index.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}