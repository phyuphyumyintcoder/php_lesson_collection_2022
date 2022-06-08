<?php 
class Chapter {
 // get chapter data
 public function get_chapters($conn)
 {
  $sql = "SELECT * FROM chapters";
    $result = mysqli_query($conn, $sql);
    $chapter_table_data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $chapter_table_data;
 }

 // insert chapter data 
 public function insert_data_chapter($conn, $data) {
     $name = $data['chapter_name'];
     $insert_chapter_data = "INSERT INTO chapters (`chapter_name`, created_at, `updated_at`) VALUES
     ('$name', Now(), Now());";
     $insert_chapter_data_result = mysqli_query($conn, $insert_chapter_data);
     
    return $insert_chapter_data_result;
      // if ($insert_chapter_data_result) {
     //     header("Location: ../chapters/index.php");
     // }else{
     //     echo "Failed to insert data";
     // }
 }

 // update chapter data
 public function update_data_chapter($conn, $data) {
  $id = $data['id'];
  $name = $data['chapter_name'];
  $update_chapter_data = "UPDATE chapters SET chapter_name = '$name', updated_at = Now() WHERE id = $id;";
  $update_chapter_data_result = mysqli_query($conn, $update_chapter_data);
  return $update_chapter_data_result;
  // if ($update_chapter_data_result) {
  //     //echo "Data updated successfully";
  // header("Location: ../chapter_index.php");
      
  // }else{
  //     echo "Failed to update data";
  // }
   }
}